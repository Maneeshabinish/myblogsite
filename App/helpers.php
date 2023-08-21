<?php

use App\core\Request;


function activeMenu($route) {

    if (Request::requestUri() == $route) {

        return "active";

    }
}

function redirectToEdit($id){



    header("Location:/editpost");
            
    exit;
}    