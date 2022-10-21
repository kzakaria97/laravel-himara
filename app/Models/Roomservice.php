<?php

namespace App\Models;

use App\Models\Room;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Roomservice extends Model
{
    use HasFactory;

    public function rooms()
    {
        return $this->belongsToMany(Room::class,'Pivotroomservice','roomservice_id','room_id');
    }
}
