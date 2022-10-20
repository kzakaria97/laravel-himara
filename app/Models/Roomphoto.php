<?php

namespace App\Models;

use App\Models\Room;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Roomphoto extends Model
{
    use HasFactory;

    public function rooms()
    {
        return $this->hasOne(Room::class,'id');
    }
}
