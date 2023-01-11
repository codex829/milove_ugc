<?php

// Label
$router->get('labels',['uses' => 'ContentController@labels']);
$router->post('labels',['uses' => 'ContentController@storeLabel']);
$router->get('labels/{id}',['uses' => 'ContentController@showLabel']);
$router->put('labels/{id}',['uses' => 'ContentController@updateLabel']);

//Content
$router->get('content', ['uses'  =>  'ContentController@index']);//get All Content
$router->post('frontContent', ['uses'  =>  'ContentController@frontContent']);//frontContent