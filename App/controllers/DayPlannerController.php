<?php

namespace App\controllers;

use App\core\App;

use App\core\database\querybuilder;


class DayPlannerController{

    public function index()
    {

        $user = App::get('database')->fetchById('users', $_GET['id']);

        $where=[
            'id'=>$_GET['id']
        ];
        
        $dayplanner= App::get('database')->fetchAll('dayPlanner', $where);
      
        return view('dayplanner',compact('dayplanner', 'user'));

        
    }

    public function store()
    {
        
        App::get('database')-> insert('dayplanner',  [
            'task'=> $_POST['names'], 
            'user_id'=>$_POST['id'],
        ]);
           
       
           
        header("Location:/dayplanner?id=". $_POST['id'] );

        exit();
       

        
    }
}