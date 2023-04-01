<?php

namespace App\Http\Livewire\Admin\Properties;

use Livewire\Component;
use App\Models\Base\Category;
use Livewire\WithFileUploads;
use App\Models\Admin\Property;

class PropertyShow extends Component
{
    //variables
    public $property_idm, $category_id, $title, $adress, $price, $number_bedrooms, $number_wc, $garage, $garden, $description, $name_property, $last_name_property, $document_property, $phone_property, $adress_property, $email_property, $description_property, $img_portada, $city, $money, $children, $pets, $forniture, $status, $team_id, $user_id;
    
    public $img_property; // tabla imagen

    public $img_portada_file; //archivo portada de formulario

    public $img_portada_anterior; // traer imagen guardada

    // habilitar subir imagen en livewire
    use WithFileUploads;

    // mount
    public function mount(Property $property)
    {
        $this->property_idm = $property->id;
        $this->title = $property->title;
        $this->category_id = $property->category_id;
        $this->adress = $property->adress;
        $this->price = $property->price;
        $this->number_bedrooms = $property->number_bedrooms;
        $this->number_wc = $property->number_wc;
        $this->garage = $property->garage;
        $this->garden = $property->garden;
        $this->city = $property->city;
        $this->money = $property->money;
        $this->children = $property->children;
        $this->pets = $property->pets;
        $this->forniture = $property->forniture;
        $this->status = $property->status;
        $this->description = $property->description;
        $this->name_property = $property->name_property;
        $this->last_name_property = $property->last_name_property;
        $this->document_property = $property->document_property;
        $this->phone_property = $property->phone_property;
        $this->adress_property = $property->adress_property;
        $this->email_property = $property->email_property;
        $this->description_property = $property->description_property;
        $this->img_portada_anterior = $property->img_portada;
        $this->team_id = $property->team_id;
        $this->user_id = $property->user_id;
    }
    
    public function render()
    {
        $viewShow = true;
        $img_properties_files = '';
        $categories = Category::all();
        return view('livewire.admin.properties.property-show',[
            'viewShow' => $viewShow,
            'img_properties_files' => $img_properties_files,
            'categories' => $categories
        ]);
    }
}
