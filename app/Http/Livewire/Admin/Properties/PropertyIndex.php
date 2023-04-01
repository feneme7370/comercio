<?php

namespace App\Http\Livewire\Admin\Properties;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Admin\Property;
use Illuminate\Support\Facades\File;

class PropertyIndex extends Component
{
    public $search;
    public $show_list;
    public $order_list;
    public $type_order_list;
    public $status_list = true;

    use WithPagination;
    // escuchar por eliminacion
    protected $listeners = ['propertyDelete'];

    // ejecutar eliminacion al ser llamada
    public function propertyDelete(Property $dato)
    {
        if($dato->img_perfil !== 'default.png'){
            if(File::exists('img/img_portada/'.$dato->img_portada)){
                File::delete('img/img_portada/'.$dato->img_portada);
            }
        }
        $dato->delete();
    }

    public function render()
    {
        $datos = Property::where('team_id', '=', auth()->user()->team_id)                         
            ->where(function($query){
                $query->where("title", 'LIKE', "%".$this->search."%")
                        ->orWhere("name_property", 'LIKE', "%".$this->search."%")
                        ->orWhere("last_name_property", 'LIKE', "%".$this->search."%")
                        ->orWhere("adress", 'LIKE', "%".$this->search."%")
                        ->orWhere("city", 'LIKE', "%".$this->search."%")
                        ->orWhere("price", 'LIKE', "%".$this->search."%");
            })->where('status', $this->status_list)
            ->orderBy($this->order_list ?? 'last_name_property', $this->type_order_list ?? 'ASC')
            ->paginate($this->show_list ?? 10);

            return view('livewire.admin.properties.property-index',[
            'datos' => $datos
        ]);
    }
}
