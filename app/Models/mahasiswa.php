<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    use HasFactory;

    protected $fillable = [
        'nim',
        'nama',
        'email',
        'angkatan',
        'keterangan',
        'passfoto',
        'prodi_id',
    ];

    public function prodiMahasiswa(){
        return $this->belongsTo(prodi::class, 'prodi_id', 'id');
    }
}
