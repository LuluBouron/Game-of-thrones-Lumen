<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    protected $table = 'character';

    /**
     * Get the title associated with the character.
     */
    public function title()
    {
        return $this->belongsTo(Title::class, 'id_title');
    }

    /**
     * Get the mother associated with the character.
     */
    public function mother()
    {
        return $this->belongsTo(Character::class, 'mother_id');
    }

    /**
     * Get the father associated with the character.
     */
    public function father()
    {
        return $this->belongsTo(Character::class, 'father_id');
    }


    public function houses()
    {
        return $this->belongsToMany('App\Models\House', 'house_has_characters', 'character', 'house');
    }




}
