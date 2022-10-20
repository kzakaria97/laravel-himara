<?php

namespace App\Models;

use App\Models\Categallerie;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Gallerie extends Model
{
    use HasFactory;

    public function categallerie(){
        return  $this->belongsTo(Categallerie::class);
      }
}
