<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class prodi extends Model
{
    use HasFactory;

    protected $fillable = [
        'inisial',
        'prodi',
    ];

    public function mahasiswap(){
        return $this->hasMany(mahasiswa::class, 'mahasiswa_id', 'id');
    }

    public function dosenp(){
        return $this->hasMany(dosen::class, 'dosen_id', 'id');
    }
}
