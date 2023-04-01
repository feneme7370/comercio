<?php

namespace App\Http\Livewire\Admin\Users;

use Carbon\Carbon;
use Livewire\Component;
use App\Models\Admin\Seller;

class UserShow extends Component
{
    public function render()
    {
        $viewShow = true;
        return view('livewire.admin.users.user-show',[
            'viewShow' => $viewShow
        ]);
    }
}
