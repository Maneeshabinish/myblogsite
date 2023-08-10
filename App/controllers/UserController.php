<?php

namespace App\controllers;

use App\core\App;

class UsersController{

    

    public function index()
    {
        $users= App::get('database')->fetchAll('users');

        return view('users',compact('users'));
    }

    public function store()
    {
        
        $name = $_POST["names"];

        $lastInsertId = App::get('database')-> insert('users',  [
            'name'=> $_POST['names']
        
        ]);
                          
        header("Location: /dayplanner?id=" . urlencode($lastInsertId));

        exit();
                   
        
            
    }
}

