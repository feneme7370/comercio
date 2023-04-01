<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'last_name',
        'email',
        'description',
        'document',
        'adress',
        'phone',
        'status',
        'rol_id',
        'team_id',
        'user_id',
        'birthday',
        'img_perfil',
    ];
}
