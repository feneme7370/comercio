<?php

namespace App\Http\Livewire\Admin\Properties;

use Livewire\Component;
use App\Models\Base\Category;
use Livewire\WithFileUploads;
use App\Models\Admin\Property;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class PropertyCreate extends Component
{
    //variables
    public $property_idm, $category_id, $title, $adress, $price, $number_bedrooms, $number_wc, $garage, $garden, $description, $name_property, $last_name_property, $document_property, $phone_property, $adress_property, $email_property, $description_property, $img_portada, $city, $money, $children, $pets, $forniture, $status, $team_id, $user_id;
    
    public $img_property; // tabla imagen

    public $img_portada_file; //archivo portada de formulario

    public $img_portada_anterior; // traer imagen guardada

    // habilitar subir imagen en livewire
    use WithFileUploads;

    // validacion
    protected $rules = [
        'category_id' => ['required', 'numeric'],
        'title' => ['required', 'string', 'max:50'],
        'adress' => ['required', 'string', 'max:50'],
        'price' => ['required', 'numeric'],
        'number_bedrooms' => ['required', 'numeric'],
        'number_wc' => ['required', 'numeric'],
        'garage' => [''],
        'garden' => [''],
        'city' => ['required','string'],
        'money' => ['required','string'],
        'children' => [],
        'pets' => [],
        'forniture' => [],
        'status' => [],
        'description' => ['required', 'string', 'max:255'],
        'name_property' => ['required', 'string', 'max:50'],
        'last_name_property' => ['required', 'string', 'max:50'],
        'document_property' => ['required', 'numeric'],
        'phone_property' => ['required'],
        'adress_property' => ['required', 'string', 'max:50'],
        'email_property' => ['required', 'email', 'max:50'],
        'description_property' => ['required', 'string', 'max:255'],
        'img_portada_file' => ['max:1024'],
    ];

    // funcion para crear
    public function propertyCreate()
    {
        // validar formulario
        $datos = $this->validate();
        $datos['garage'] = $datos['garage'] ? '1' : '0';
        $datos['garden'] = $datos['garden'] ? '1' : '0';
        $datos['pets'] = $datos['pets'] ? '1' : '0';
        $datos['forniture'] = $datos['forniture'] ? '1' : '0';
        $datos['status'] = $datos['status'] ? '1' : '0';
        $datos['team_id'] = auth()->user()->team_id;
        $datos['user_id'] = auth()->user()->id;
        
        // validar si hay imagen
        if($this->img_portada_file){
            // dar accesso a imagenes 3000x3000
            ini_set('memory_limit', '256M');

            $image = $this->img_portada_file;
            $file_name = time().'-'.md5( uniqid( rand(), true ) ).'.'.$image->getClientOriginalExtension();
            $imagen_resize = Image::make($image->getRealPath());
    
            $height = Image::make($image->getRealPath())->height();
            $width = Image::make($image->getRealPath())->width();

            if($height > 3000 && $width >3000){
                $imagen_resize->rotate(-90)->resize(1200, null, function ($constraint) {
                    $constraint->aspectRatio();
                });
            }else{
                $imagen_resize->resize(1200, null, function ($constraint) {
                    $constraint->aspectRatio();
                });           
            }
    
            if(!is_dir('img/img_portada')){
                mkdir('img/img_portada', 0755, true);
            }

            if($this->img_portada_anterior !== 'default.png'){
                if(File::exists('img/img_portada/'.$this->img_portada_anterior)){
                    File::delete('img/img_portada/'.$this->img_portada_anterior);
                }
            }

            $imagen_resize->save('img/img_portada/'.$file_name, 60);
            $datos['img_portada'] = $file_name;   
        }else{
            $datos['img_portada'] = $this->img_portada_anterior ??
            $datos['img_portada'] = 'default.png';       
        }

        // crear la vacante
        $propiedad = Property::create($datos);
        // validar si hay imagen
        if($this->img_property){
            // dar accesso a imagenes 3000x3000
            ini_set('memory_limit', '256M');
            
            if(!is_dir('img/img_properties')){
                mkdir('img/img_properties', 0755, true);
            }
            
            foreach($this->img_property as $img_files){
                $image = $img_files;
                $file_name = time().'-'.md5( uniqid( rand(), true ) ).'.'.$image->getClientOriginalExtension();
                $imagen_resize = Image::make($image->getRealPath());
        
                $height = Image::make($image->getRealPath())->height();
                $width = Image::make($image->getRealPath())->width();
    
                if($height > 3000 && $width >3000){
                    $imagen_resize->rotate(-90)->resize(1200, null, function ($constraint) {
                        $constraint->aspectRatio();
                    });
                }else{
                    $imagen_resize->resize(1200, null, function ($constraint) {
                        $constraint->aspectRatio();
                    });           
                }
        
                $imagen_resize->save('img/img_properties/'.$file_name);
                
                $propiedad->propertyImages()->create([
                    'property_id' => $propiedad->id,
                    'name' => $file_name,
                    'type' => 'properties',
                ]);
            }
        }

        //crear mensaje
        session()->flash('mensaje-exito', 'Creado correctamente');

        // redireccionar
        return redirect()->route('property.index');
    }

    public function render()
    {
        $categories = Category::all();
        $img_properties_files = '';
        $viewShow = false;
        return view('livewire.admin.properties.property-create', [
            'img_properties_files' => $img_properties_files,
            'categories' => $categories,
            'viewShow' => $viewShow
        ]);
    }
}
