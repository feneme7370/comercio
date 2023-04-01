<?php

namespace App\Http\Livewire\Admin\Users;

use Livewire\Component;

class UserCreate extends Component
{


    public function render()
    {
        $viewShow = false;
        return view('livewire.admin.users.user-create',[
            'viewShow' => $viewShow
        ]);
    }
}
