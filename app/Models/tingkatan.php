<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tingkatan extends Model
{
    use HasFactory;

    protected $fillable = [
        'tingkatan',

    ];


    public function events(){
        return $this->hasMany(Event::class, 'tingkatan_id', 'id');
    }
}
