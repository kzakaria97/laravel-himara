<?php

namespace App\Models;

use App\Models\Photonav;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Navbar extends Model
{
    use HasFactory;

    public function photos()
    {
        return $this->belongsTo(Photonav::class);
    }
}
