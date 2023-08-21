<?php

namespace App\controllers;

use App\core\App;

use App\core\database\querybuilder;


class AllpostsController{

    public function index()
    {
                
        $posts= App::get('database')->fetchAll('post');
      
        return view('allposts', compact('posts'));
       
    }
}