<?php

namespace App\Http\Livewire\Admin\Sellers;

use Livewire\Component;
use App\Models\Admin\Seller;
use Livewire\WithPagination;
use Illuminate\Support\Facades\File;

class SellerIndex extends Component
{
    public $search;
    public $show_list;
    public $order_list;
    public $type_order_list;
    public $status_list = true;

    use WithPagination;

    // escuchar por eliminacion
    protected $listeners = ['sellerDelete'];

    // ejecutar eliminacion al ser llamada
    public function sellerDelete(Seller $dato)
    {
        if($dato->img_perfil !== 'default.png'){
            if(File::exists('img/img_perfil/'.$dato->img_perfil)){
                File::delete('img/img_perfil/'.$dato->img_perfil);
            }
        }
        $dato->delete();
    }

    public function render()
    {
        $datos = Seller::where('team_id', '=', auth()->user()->team_id)                         
        ->where(function($query){
            $query->where("email", 'LIKE', "%".$this->search."%")
                    ->orWhere("name", 'LIKE', "%".$this->search."%")
                    ->orWhere("last_name", 'LIKE', "%".$this->search."%")
                    ->orWhere("phone", 'LIKE', "%".$this->search."%")
                    ->orWhere("document", 'LIKE', "%".$this->search."%")
                    ->orWhere("adress", 'LIKE', "%".$this->search."%");
        })->where('status', $this->status_list)
        ->orderBy($this->order_list ?? 'last_name', $this->type_order_list ?? 'ASC')
        ->paginate($this->show_list ?? 10);

        return view('livewire.admin.sellers.seller-index',[
            'datos' => $datos
        ]);
    }
}
