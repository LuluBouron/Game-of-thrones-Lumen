<?php

namespace App\Http\Controllers;

use App\Models\Character;
use App\Models\House;
use App\Models\HouseHasCharacters;
use App\Models\Migration;
use Laravel\Lumen\Routing\Controller as BaseController;

class HouseController extends Controller
{

    public function list()
    {
       $houses = House::all();

       return view('house/list', [
        'houses' => $houses,
    ]);
    }

    public function item($id)
    {
        $house = House::findOrFail($id);

        $characters = House::find($id)->characters;


        return view('house/item', [
        'house' => $house,
        'characters' => $characters,

        ]);
    }
}
