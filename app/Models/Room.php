<?php

namespace App\Models;

use App\Models\Tag;
use App\Models\Service;
use App\Models\Roomphoto;
use App\Models\Roomcategorie;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Room extends Model
{
    use HasFactory;

    public function tags()
    {
        return $this->belongsToMany(Tag::class,'Pivotroomtag','room_id','tag_id');
    }
    public function roomservices()
    {
        return $this->belongsToMany(Service::class,'Pivotroomservice','room_id','roomservice_id');
    }
    public function roomphotos()
    {
        return $this->belongsTo(Roomphoto::class);
    }
    public function roomcategories()
    {
        return $this->belongsTo(Roomcategorie::class);
    }
    
}
