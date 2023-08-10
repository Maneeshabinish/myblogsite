<?php

require 'vendor/autoload.php';

require 'App/core/bootstrap.php';

use App\core\{Request, Router};

Router::load('App/routes.php')->direct(Request::requestUri(), Request::method());



