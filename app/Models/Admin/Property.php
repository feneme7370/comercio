<?php

namespace App\Models\Admin;

use App\Models\Base\Category;
use App\Models\Base\Image;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_id',
        'adress',
        'city',
        'price',
        'money',
        'number_bedrooms',
        'number_wc',
        'children',
        'title',
        'pets',
        'garage',
        'garden',
        'forniture',
        'description',
        'name_property',
        'last_name_property',
        'document_property',
        'phone_property',
        'adress_property',
        'email_property',
        'status',
        'description_property',
        'img_portada',
        'user_id',
        'team_id',
    ];

    public function propertyImages(){
        return $this->hasMany(Image::class, 'property_id', 'id');
    }
    public function category(){
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}
