<?php

namespace App\Http\Livewire\Admin\Sellers;

use Livewire\Component;
use App\Models\Admin\Seller;
use Illuminate\Support\Carbon;

class SellerShow extends Component
{
    // traer datos del modelo
    public $seller;
    // variables
    public $seller_idm, $name, $last_name, $email, $document, $birthday, $adress, $phone, $status, $team_id, $rol_id, $user_id, $description, $img_perfil;
    // archivo a guardar
    public $img_perfil_file;
    // traer imagen guardada
    public $img_perfil_anterior;

    // precargar datos
    public function mount(Seller $seller)
    {
        $this->seller_idm = $seller->id;
        $this->name = $seller->name;
        $this->last_name = $seller->last_name;
        $this->email = $seller->email;
        $this->document = $seller->document;
        $this->birthday = Carbon::parse($seller->birthday)->format('Y-m-d') ;
        $this->status = $seller->status;
        $this->adress = $seller->adress;
        $this->phone = $seller->phone;
        $this->description = $seller->description;
        $this->rol_id = $seller->rol_id;
        $this->img_perfil_anterior = $seller->img_perfil;
        $this->team_id = $seller->team_id;
        $this->user_id = $seller->user_id;
    }

    public function render()
    {
        $viewShow = true;
        return view('livewire.admin.sellers.seller-show',[
            'viewShow' => $viewShow
        ]);
    }
}
