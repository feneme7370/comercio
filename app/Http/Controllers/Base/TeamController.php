<?php

namespace App\Http\Controllers\Base;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index()
    {
        return view('app.admin.teams.index',[
            'title' => 'Empresas'
        ]);
    }
}
