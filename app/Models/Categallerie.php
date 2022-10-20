<?php

namespace App\Models;

use App\Models\Gallerie;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Categallerie extends Model
{
    use HasFactory;
    
    public function galleries(){
        return $this->hasOne(Gallerie::class, 'categallerie_id','id');
    }
}
