<?php

namespace App\Http\Livewire\Admin\Users;

use Carbon\Carbon;
use Livewire\Component;
use App\Models\Admin\Seller;
use Livewire\WithFileUploads;
use Intervention\Image\Facades\Image;

class UserEdit extends Component
{

    public function render()
    {
        $viewShow = false;
        return view('livewire.admin.users.user-edit',[
            'viewShow' => $viewShow
        ]);
    }
}
