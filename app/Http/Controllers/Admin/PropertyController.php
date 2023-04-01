<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function index()
    {
        return view('app.admin.properties.index');
    }
    public function create()
    {
        return view('app.admin.properties.create');
    }
    public function edit(Property $property)
    {
        return view('app.admin.properties.edit',[
            'property' => $property
        ]);
    }
    public function show(Property $property)
    {
        return view('app.admin.properties.show',[
            'property' => $property
        ]);
    }
}
