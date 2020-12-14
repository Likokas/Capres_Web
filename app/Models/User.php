<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

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
        'is_login',
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

    public function isAdmin(){
        if ($this->role->nama=='Admin'&&$this->is_login=='1'){
            return true;
        }
        return false;
    }

    public function isUser(){
        if ($this->role->nama=='User'&&$this->is_login=='1'){
            return true;
        }
        return false;
    }
}
