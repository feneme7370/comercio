<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Admin\Property;
use App\Models\Base\Category;
use App\Models\Base\Team;
use Illuminate\Http\Request;
use Livewire\WithPagination;

class WelcomeController extends Controller
{
    use WithPagination;

    public function index()
    {
        $properties = Property::orderBy('id', 'desc')->take(6)->get();
        $teams = Team::find('1');
        $teams_social = json_decode($teams->social);
        return view('app.guest.welcome', [
            'portada' => true,
            'teams' => $teams,
            'teams_social' => $teams_social,
            'properties' => $properties
        ]);
    }
    public function about()
    {
        $teams = Team::find('1');
        $teams_social = json_decode($teams->social);
        return view('app.guest.about',[
            'portada' => false,
            'teams' => $teams,
            'teams_social' => $teams_social
        ]);
    }
    public function propiedades()
    {
        $teams = Team::find('1');
        $teams_social = json_decode($teams->social);
        return view('app.guest.propiedades', [
            'portada' => false,
            'teams' => $teams,
            'teams_social' => $teams_social,
        ]);
    }
    public function propiedad($property)
    {
        $property = Property::find($property);
        $img_properties_files = \App\Models\Base\Image::where('property_id', '=' , $property->id)->where('type', '=' , 'properties')->get();
        $teams = Team::find('1');
        $teams_social = json_decode($teams->social);
        return view('app.guest.propiedad', [
            'portada' => false,
            'property' => $property,
            'img_properties_files' => $img_properties_files,
            'teams' => $teams,
            'teams_social' => $teams_social,
        ]);
    }
    public function contact()
    {
        $teams = Team::find('1');
        $teams_social = json_decode($teams->social);
        return view('app.guest.contact',[
            'portada' => false,
            'teams' => $teams,
            'teams_social' => $teams_social,
        ]);
    }
    public function blog()
    {
        $teams = Team::find('1');
        $teams_social = json_decode($teams->social);
        return view('app.guest.blog',[
            'portada' => false,
            'teams' => $teams,
            'teams_social' => $teams_social,
        ]);
    }
}
