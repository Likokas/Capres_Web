<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class negara extends Model
{
    use HasFactory;

    protected $fillable = [
        'negara',

    ];

    public function events(){
        return $this->hasMany(Event::class, 'negara_id', 'id');
    }
}
