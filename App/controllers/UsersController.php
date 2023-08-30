<?php

namespace App\controllers;

use App\core\App;

use App\core\database\querybuilder;

use App\core\Session;


class UsersController{



    public function users()
    {

    $user = App::get('database')->fetchall('users');

    return view('users', compact('user'));
     
       
    }

    public function validuser(){

        $email_id = $_POST['email'];

        $pwd = $_POST['password'];

        $valid_login = App::get('database')-> getcount('users', $email_id, $pwd);

        if($valid_login){

            Session::set('message', "You have logged in successfully");

            header("Location:/validation");

            exit;   

           
        }else{
        Session::set('message', "Invalid Email id.");

        header("Location:/validation");

        exit;
            
        }
    }
    public function adduser()
    {
        App::get('database')-> insert('users',  [
            'first_name'=> $_POST['firstname'], 
            'last_name'=> $_POST['lastname'],
            'email'=> $_POST['email'], 
            'password'=> $_POST['password'],
            
        ]);

     Session::set('message','You have signed in successfully');


    header("Location:/validation");
            
    exit;

    }
}