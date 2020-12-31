<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class point extends Model
{
    use HasFactory;

    protected $fillable = [
        'keterangan',
        'point',

    ];

    public function events(){
        return $this->hasMany(EventUser::class, 'point_id', 'id');
    }
}
