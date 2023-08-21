
<?php


 $router-> get('addpost','AddpostController@addpost');

 $router-> post('addpost','AddpostController@store');

 $router-> get('allposts','AllpostsController@index');

 $router-> get('editpost','PagesController@editpost');

 $router-> post('editpost','AllpostsController@index');

 $router-> get('deletepost','PagesController@deletepost');

  $router-> get('users','PagesController@users');








