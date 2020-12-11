<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jabatan extends Model
{
    use HasFactory;

    protected $fillable = [
        'inisial',
        'prodi',
    ];

    public function dosenj(){
        return $this->hasMany(dosen::class, 'dosen_id', 'id');
    }
}
