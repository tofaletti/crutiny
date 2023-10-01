<?php 

require_once __DIR__ . '/../includes/app.php';

use Controllers\ChargerController;
use MVC\Router;
use Controllers\LoginController;

$router = new Router();

// Login
$router->get('/', [LoginController::class, 'login']);
$router->post('/', [LoginController::class, 'login']);
$router->get('/tutoriales', [LoginController::class, 'tutorials']);
$router->get('/logout', [LoginController::class, 'logout']);

// Signin
$router->get('/crear-cuenta', [LoginController::class, 'signin']);
$router->post('/crear-cuenta', [LoginController::class, 'signin']);


// Provincial
$router->get('/inicio', [ChargerController::class, 'index']);


// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->comprobarRutas();