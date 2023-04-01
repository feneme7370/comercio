<?php

namespace App\Http\Livewire\Guest;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Base\Category;
use App\Models\Admin\Property;

class PropertiesIndex extends Component
{
    public $search;
    public $show_list;
    public $order_list;
    public $type_order_list;
    public $category_list = 1;
    public $garage_list;
    public $garden_list;
    public $status_list = true;


    use WithPagination;
    
    public function render()
    {
        $categories = Category::orderBy('id', 'DESC')->get();
        
        $datos = Property::where('team_id', '=', 1)                         
            ->where(function($query){
                $query->where("title", 'LIKE', "%".$this->search."%")
                        ->orWhere("adress", 'LIKE', "%".$this->search."%")
                        ->orWhere("city", 'LIKE', "%".$this->search."%")
                        ->orWhere("price", 'LIKE', "%".$this->search."%");
            })
            ->where('category_id', $this->category_list)
            ->where('status', 1)
            ->orderBy($this->order_list ?? 'created_at', $this->type_order_list ?? 'DESC')
            ->paginate($this->show_list ?? 8);

        return view('livewire.guest.properties-index',[
            'categories' => $categories,
            'datos' => $datos
        ]);
    }
}
