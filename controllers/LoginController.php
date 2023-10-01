<?php

namespace Controllers;

use Model\ActiveRecord;
use Model\User;
use MVC\Router;


class LoginController extends ActiveRecord{
    public static function login(Router $router){

        $alertas = [];

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $user = new User($_POST);
            $alertas = $user->validarLogin();

            if(empty($alertas)){
                $user = User::where('name', $user->name);

                if(!$user){
                    User::setAlerta('error', 'El usuario no existe');
                }else{
                    if(password_verify($_POST['password'], $user->password)){
                        session_start();
                        $_SESSION['id'] = $user->id;
                        $_SESSION['name'] = $user->name;
                        $_SESSION['login'] = true;

                        header('Location: /inicio');
                    }else{
                        User::setAlerta('error', 'Contraseña Incorrecta');
                    }
                }
            }
        }   

        $alertas = User::getAlertas();

        $router->render('auth/login', [
            'titulo' => 'Iniciar Sesión',
            'alertas'=> $alertas
        ]);
    }

    public static function logout(){
        session_start();
        $_SESSION = [];
        header('Location: /');
    }

    public static function signin(Router $router){
        $alertas = [];
        $user = new User;

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $user->sincronizar($_POST);
            $alertas = $user->validarNuevaCuenta();

            if(empty($alertas)){
                $existeUsuario = User::where('name', $user->name);
                
                if($existeUsuario){
                    User::setAlerta('error', 'El Usuario ya esta registrado');
                    $alertas = User::getAlertas();
                }else{
                    $user->hashPassword();
                    unset($user->password2);
                    $resultado = $user->guardar();
                }

                if($resultado){
                    header('Location: /');
                }
            }
        }

        $router->render('auth/signin', [
            'titulo' => 'Crear Cuenta',
            'alertas' => $alertas
        ]);
    }
}