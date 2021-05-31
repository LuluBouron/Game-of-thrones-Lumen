<?php

namespace App\Http\Controllers;

use App\Models\Character;
use App\Models\House;
use App\Models\Migration;
use Laravel\Lumen\Routing\Controller as BaseController;

class MainController extends Controller
{
    public function home()
    {
        $characters = Character::all();

        return view('main/homepage', [
        'characters' => $characters,

    ]);
    }
}
