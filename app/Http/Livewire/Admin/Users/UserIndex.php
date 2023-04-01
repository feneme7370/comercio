<?php

namespace App\Http\Livewire\Admin\Users;

use Livewire\Component;
use App\Models\Admin\Seller;
use Livewire\WithPagination;

class UserIndex extends Component
{
    public function render()
    {

        return view('livewire.admin.users.user-index');
    }
}
