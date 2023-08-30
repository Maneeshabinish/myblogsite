<?php

namespace App\controllers;

use App\core\App;

use App\core\querybuilder;

use App\core\Session;

class PagesController{
 

    

    public function allposts()
    {
        return view('allposts');

    }

    public function signup()
    {
        return view('signup');

    }

    public function users()
    {
        return view('users');

    }

    public function validation()
    {
        return view('validation');

    }

    public function login(){

        return view('login');
    }

    
  
    public function editpost()
    {

        $edit_post_id = $_GET['id'];

        $fetch_post = App::get('database') -> fetchById('post', $edit_post_id);

        return view('editpost',compact('fetch_post'));

    }

   
    public function deletepost()
    {

        $delete_post_id = $_GET['id'];
        
        App::get('database') -> delete('post', $delete_post_id);
     
        header('Location:/allposts'); 

        exit;

    }
      
}