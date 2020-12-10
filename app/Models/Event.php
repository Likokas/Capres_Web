<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_event_id',
        'keterangan_event',
        'prestasi',
        'bukti',
        'tanggal_pelaksanaan',
        'negara_id',
        'pembimbing_id',
        'tingkatan_id',
        'penyelenggara',
        'jenis_id',
        'point_id',
    ];


    public function namaEvent(){
        return $this->belongsTo(nama_event::class, 'nama_event_id', 'id');
    }

    public function negara(){
        return $this->belongsTo(negara::class, 'negara_id', 'id');
    }

    public function pembimbing(){
        return $this->belongsTo(pembimbing::class, 'pembimbing_id', 'id');
    }

    public function tingkatan(){
        return $this->belongsTo(tingkatan::class, 'tingkatan_id', 'id');
    }

    public function jenis(){
        return $this->belongsTo(jenis::class, 'jenis_id', 'id');
    }

    public function point(){
        return $this->belongsTo(point::class, 'point_id', 'id');
    }
}
