<?php

namespace App\Models\Base;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'phone',
        'adress',
        'social',
        'city',
        'email',
        'status',
    ];

    public function users(){
        return $this->hasMany(User::class, 'user_id', 'id');
    }
}
