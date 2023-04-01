<?php

namespace App\Http\Livewire\Helper;

use Livewire\Component;

class MostrarAlerta extends Component
{
    public $message;
    public function render()
    {
        return view('livewire.helper.mostrar-alerta');
    }
}
