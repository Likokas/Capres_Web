<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jenis extends Model
{
    use HasFactory;

    protected $fillable = [
        'jenis',

    ];

    public function events(){
        return $this->hasMany(Event::class, 'jenis_id', 'id');
    }
}
