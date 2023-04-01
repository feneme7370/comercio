<?php

namespace App\Http\Livewire\Admin\Sellers;

use Livewire\Component;
use App\Models\Admin\Seller;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class SellerCreate extends Component
{
    // traer datos del modelo
    public $seller;
    // variables
    public $seller_idm, $name, $last_name, $email, $document, $birthday, $adress, $phone, $status, $team_id, $rol_id, $user_id, $description, $img_perfil;
    // archivo a guardar
    public $img_perfil_file;
    // traer imagen guardada
    public $img_perfil_anterior;

    // habilitar subir imagen en livewire
    use WithFileUploads;

    // validacion
    protected $rules = [
        'name' => ['required', 'string', 'max:50'],
        'last_name' => ['required', 'string', 'max:50'],
        'email' => ['required', 'email', 'max:50'],
        'document' => ['required', 'numeric'],
        'birthday' => ['required'],
        'status' => [],
        'adress' => ['required', 'max:50'],
        'phone' => ['required'],
        'description' => ['string'],
        'img_perfil_file' => ['nullable','mimes:jpg,png,jpeg', 'max:1024'],
    ];

    // funcion para crear
    public function userCreate()
    {
        // validar formulario
        $datos = $this->validate();
        $datos['status'] = $datos['status'] ? '1' : '0';
        // if($datos['status'] == NULL || $datos['status'] == '0'){$datos['status'] = '0';}else{$datos['status'] = '1';}
        $datos['rol_id'] = 2;
        $datos['user_id'] = auth()->user()->id;
        $datos['team_id'] = auth()->user()->team_id;

        // validar si hay imagen
        if($this->img_perfil_file){
            // dar accesso a imagenes 3000x3000
            ini_set('memory_limit', '256M');

            $image = $this->img_perfil_file;
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

            if(!is_dir('img/img_perfil')){
                mkdir('img/img_perfil', 0755, true);
            }

            if($this->img_perfil_anterior !== 'default.png'){
                if(File::exists('img/img_perfil/'.$this->img_perfil_anterior)){
                    File::delete('img/img_perfil/'.$this->img_perfil_anterior);
                }
            }
    
            $imagen_resize->save('img/img_perfil/'.$file_name, 60);
            $datos['img_perfil'] = $file_name;       
        }else{
            $datos['img_perfil'] = $this->img_perfil_anterior ??
            $datos['img_perfil'] = 'default.png';       
        }
        // crear la vacante
        Seller::create($datos);

        //crear mensaje
        session()->flash('mensaje-exito', 'Creado correctamente');

        // redireccionar
        return redirect()->route('seller.index');
    }
    
    public function render()
    {
        $viewShow = false;
        return view('livewire.admin.sellers.seller-create',[
            'viewShow' => $viewShow
        ]);
    }
}
