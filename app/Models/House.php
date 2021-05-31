<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    protected $table = 'house';

     /**
     * Get all related characters
     */
    public function characters()
    {
        return $this->belongsToMany('App\Models\Character', 'house_has_characters',  'house', 'character');
    }
}


