<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jaka extends Model
{
    use HasFactory;

    protected $fillable = [
        'jaka',
    ];

    public function dosenjaka(){
        return $this->hasMany(dosen::class, 'dosen_id', 'id');
    }
}
