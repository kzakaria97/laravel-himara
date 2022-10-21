<?php

namespace App\Models;

use App\Models\Navbar;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Photonav extends Model
{
    use HasFactory;

    public function Navs()
    {
        return $this->hasOne(Navbar::class);
    }
}
