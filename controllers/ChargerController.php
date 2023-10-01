<?php

namespace Controllers;

use Model\ActiveRecord;
use MVC\Router;

class ChargerController extends ActiveRecord{
    public static function index(Router $router){
        session_start();
        isAuth();

        $router->render('charger/index', [
            'titulo' => 'Inicio'
        ]);
    }

}