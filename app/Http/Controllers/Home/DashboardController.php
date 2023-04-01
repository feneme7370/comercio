<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Admin\Property;
use App\Models\Admin\Seller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sellers = Seller::all();
        $properties = Property::all();
        $properties_alquilar = Property::where('category_id', '1');
        $properties_comprar = Property::where('category_id', '2');
        $properties_vender = Property::where('category_id', '3');
        return view('app.admin.dashboard',[
            'sellers' => $sellers,
            'properties' => $properties,
            'properties_alquilar' => $properties_alquilar,
            'properties_comprar' => $properties_comprar,
            'properties_vender' => $properties_vender,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
