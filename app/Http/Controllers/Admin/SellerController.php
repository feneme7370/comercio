<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\Seller;

class SellerController extends Controller
{
    public function index()
    {
        return view('app.admin.sellers.index',[
            'title' => 'Vendedores'
        ]);
    }
    public function create()
    {
        return view('app.admin.sellers.create',[
            'title' => 'Vendedores'
        ]);
    }
    public function edit(Seller $seller)
    {
        return view('app.admin.sellers.edit',[
            'title' => 'Vendedores',
            'seller' => $seller
        ]);
    }
    public function show(Seller $seller)
    {
        return view('app.admin.sellers.show',[
            'title' => 'Vendedores',
            'seller' => $seller
        ]);
    }
}
