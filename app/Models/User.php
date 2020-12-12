<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'username',
        'password',
        'mahasiswa_id',
        'dosen_id',
        'role_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function mahasiswa(){
        return $this->belongsTo(mahasiswa::class, 'mahasiswa_id', 'id');
    }

    public function dosen(){
        return $this->belongsTo(dosen::class, 'dosen_id', 'id');
    }

    public function role(){
        return $this->belongsTo(role::class, 'role_id', 'id');
    }

    public function attends_user(){
        return $this->belongsToMany(Event::class)->withPivot('is_approved')->withTimestamps();
    }

    public function pembimbing_user(){
        return $this->belongsToMany(Event::class)->withPivot('pembimbing_id')->withTimestamps();
    }

    public function point_user(){
        return $this->belongsToMany(Event::class)->withPivot('point_id')->withTimestamps();
    }

    public function tanggal_user(){
        return $this->belongsToMany(Event::class)->withPivot('tanggal_input')->withTimestamps();
    }

    public function pesan_user(){
        return $this->belongsToMany(Event::class)->withPivot('pesan')->withTimestamps();
    }

    public function prestasi_user(){
        return $this->belongsToMany(User::class)->withPivot('prestasi')->withTimestamps();
    }

    public function bukti_user(){
        return $this->belongsToMany(User::class)->withPivot('bukti')->withTimestamps();
    }
}
