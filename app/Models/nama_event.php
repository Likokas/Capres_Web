<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nama_event extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_event',

        ];

    public function events(){
        return $this->hasMany(Event::class, 'nama_event_id', 'id');
    }
}
