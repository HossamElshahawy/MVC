<?php
namespace MVC\models;
use MVC\core\model;
class user extends model {

    public function GetAllUsers(){
        $data = model::db()->run("SELECT * FROM user")->fetchAll();
        return $data;
    }
    public function GetUser($email,$password){

        $user_data = model::db()->row("SELECT * FROM user WHERE `email` = ? && `password` = ? " ,[$email,$password]);
        return $user_data;
    }
    public function Register($email,$password,$name){
    $Insert_data = [
        'email' => $_POST['email'],
        'password' => $_POST['password'],
        'name' => $_POST['name'],
    ];
    return $Insert_data;
    }
}