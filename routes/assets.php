<?php
$router->get('avatar/{msisdn}/{image}', ['uses'  =>  'AssetsController@getAvatar']);
$router->get('thumbnail/{msisdn}/{image}', ['uses'  =>  'AssetsController@getThumbnail']);
$router->get('videoProfile/{msisdn}/{image}', ['uses'  =>  'AssetsController@getVideoProfile']);
$router->get('popup/{image}', ['uses'  =>  'AssetsController@getPopup']);
$router->get('getZodiaclogo/{image}', ['uses'  =>  'AssetsController@getZodiaclogo']);
$router->get('scanAvatar/{image}', ['uses'  =>  'AssetsController@getScanAvatar']);
$router->get('backsoundImg/{image}', ['uses'  =>  'AssetsController@backsoundImg']);
$router->get('backsound/{sound}', ['uses'  =>  'AssetsController@backsound']);
