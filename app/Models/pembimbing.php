<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pembimbing extends Model
{
    use HasFactory;

    protected $fillable = [
        'pembimbing',

    ];

//    public function events(){
//        return $this->hasMany(Event::class, 'pembimbing_id', 'id');
//    }
}
