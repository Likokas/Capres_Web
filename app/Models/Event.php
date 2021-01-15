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

    public function attends_event(){
        return $this->belongsToMany(User::class)->withPivot('is_approved')->withTimestamps();
    }

    public function dosen_event(){
        return $this->belongsToMany(User::class)->withPivot('dosen_id')->withTimestamps();
    }

    public function point_event(){
        return $this->belongsToMany(User::class)->withPivot('point_id')->withTimestamps();
    }

    public function tanggal_event(){
        return $this->belongsToMany(User::class)->withPivot('tanggal_input')->withTimestamps();
    }

    public function pesan_event(){
        return $this->belongsToMany(User::class)->withPivot('pesan')->withTimestamps();
    }

    public function prestasi_event(){
        return $this->belongsToMany(User::class)->withPivot('prestasi')->withTimestamps();
    }

//    public function bukti_event(){
//        return $this->belongsToMany(User::class)->withPivot('bukti')->withTimestamps();
//    }

}
