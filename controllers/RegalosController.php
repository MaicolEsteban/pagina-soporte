<?php

namespace Controllers;


use MVC\Router;

class RegalosController {

    public static function index(Router $router) {
        $router->render('admin/Regalos/index', [
            'titulo' => 'Regalos'
        ]);
        
    }
}