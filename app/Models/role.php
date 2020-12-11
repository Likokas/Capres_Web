<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class role extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
    ];

    public function roles(){
        return $this->hasMany(User::class, 'role_id', 'id');
    }
}
