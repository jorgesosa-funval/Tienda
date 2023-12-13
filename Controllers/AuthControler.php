<?php

namespace Models;
use Models\Auth;
require_once $_SERVER['DOCUMENT_ROOT'] . '/Vendor/autoload.php';

class AuthControler{
    public function store(){
        
        $correo =  $_POST['correo'];
        $hash =  password_hash($_POST['password'], PASSWORD_DEFAULT);
        $rol_id =  $_POST['rol'];

        $auth = new Auth;
        $auth -> register($correo, $hash, $rol_id);

        header('location: index.php');

    }
}