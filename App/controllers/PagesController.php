<?php

namespace App\controllers;

class PagesController{
    
    public function home()
    {
                        
        return view('index'); 


    }

    public function about()
    {

        $company = 'Zyxware';
        return view('About',['company'=>$company]);

    }

    public function contact()
    {
        
        return view('Contact');

    }

    public function dayplanner()
    {

        return view('dayplanner');

    }
    
}