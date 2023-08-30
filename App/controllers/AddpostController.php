<?php

namespace App\controllers;

use App\core\App;

use App\core\Request;

use App\core\Session;

class AddpostController{
 
    
    public function addpost()
    {
        
        return view('addpost');

    }

   
    public function store()
    {
        
        App::get('database')-> insert('post',  [
                    'title'=> $_POST['Title'], 
                    'post'=> $_POST['Post'],
                    'author'=> $_POST['Author'], 
                    'status'=> $_POST['Published'],
                    'publish_date'=> date('Y-m-d H:i:s'),
                ]);

        Session::set('message','Blog added successfully');
        
        
        header("Location:/addpost");
            
         exit;

    }

}