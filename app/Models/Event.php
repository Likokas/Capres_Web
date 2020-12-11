<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_event',
        'keterangan_event',
        'tanggal_pelaksanaan',
        'negara_id',
        'tingkatan_id',
        'penyelenggara',
        'jenis_id',
    ];



    public function negara(){
        return $this->belongsTo(negara::class, 'negara_id', 'id');
    }


    public function tingkatan(){
        return $this->belongsTo(tingkatan::class, 'tingkatan_id', 'id');
    }

    public function jenis(){
        return $this->belongsTo(jenis::class, 'jenis_id', 'id');
    }

}
