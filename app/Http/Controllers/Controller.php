<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    protected function show(string $viewName, $viewVars = []) {

        extract($viewVars);

        require_once __DIR__.'../../../../resources/views/layout/header.tpl.php';
        require_once __DIR__.'../../../../resources/views/'.$viewName.'.tpl.php';
        require_once __DIR__.'../../../../resources/views/layout/header.tpl.php';
    }

}
