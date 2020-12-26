<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class EventUser extends Pivot
{
    use HasFactory;
    protected $table = 'event_user';

    public function point(){
        return $this->belongsTo(Event::class, 'point_id', 'id');
    }

    public function dosen(){
        return $this->belongsTo(dosen::class, 'dosen_id', 'id');
    }

     public function event(){
         return $this->belongsTo(Event::class, 'event_id', 'id');
     }

     public function user(){
         return $this->belongsTo(User::class, 'user_id', 'id');
     }
}
