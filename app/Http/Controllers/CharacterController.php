<?php

namespace App\Http\Controllers;

use App\Models\Character;
use App\Models\House;
use App\Models\HouseHasCharacters;
use App\Models\Migration;
use Illuminate\Support\Facades\DB;
use Laravel\Lumen\Routing\Controller as BaseController;

class CharacterController extends Controller
{

    public function item($id)
    {
        $character = Character::findOrFail($id);

        $title = Character::find($id)->title;

        $mother = Character::find($id)->mother;

        $father = Character::find($id)->father;

        $house = Character::find($id)->houses;

        foreach($house as $currentHouse){
            $colorHouse = $currentHouse->colour;

        }

        return view('character/biography', [
        'character' => $character,
        'title' => $title,
        'mother' => $mother,
        'father' => $father,
        'house' => $house,
        'color' => $colorHouse,

        ]);
    }


}
