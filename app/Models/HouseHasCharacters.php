<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HouseHasCharacters extends Model
{
    public function character()
    {
        return $this->hasMany('App\Models\Character', 'character');
    }
}
