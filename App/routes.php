
<?php


 $router-> get('addpost','AddpostController@addpost');

 $router-> post('addpost','AddpostController@store');

 $router-> get('allposts','AllpostsController@index');

 $router-> get('editpost','PagesController@editpost');

 $router-> post('editpost','AllpostsController@index');

 $router-> get('deletepost','PagesController@deletepost');

 $router-> get('signup','PagesController@signup');

 $router-> post('signup','UsersController@adduser');

 $router-> get('validation','PagesController@validation');
 
 $router-> get('users','UsersController@users');

 $router-> get('login','PagesController@login');

 $router-> post('login','UsersController@validuser');











