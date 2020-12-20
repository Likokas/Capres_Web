<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dosen extends Model
{
    use HasFactory;

    protected $fillable = [
        'nip',
        'nidn',
        'nama',
        'phone',
        'line_account',
        'email',
        'keterangan',
        'passfoto',
        'prodi_id',
        'jabatan_id',
        'jaka_id',
    ];

    public function prodiDosen(){
        return $this->belongsTo(prodi::class, 'prodi_id', 'id');
    }

    public function jabatan(){
        return $this->belongsTo(jabatan::class, 'jabatan_id', 'id');
    }

    public function jaka(){
        return $this->belongsTo(jaka::class, 'jaka_id', 'id');
    }
}
