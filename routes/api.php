<?php

// use FastRoute\Route;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Route;

// Matches "/api/register
// $router->post('register', 'AuthController@register');
$router->post('register', ['uses' => 'API\v1\UserController@register']);


// Matches "/api/login
$router->post('login', 'AuthController@login');


// User Profile
$router->get('profile', 'UserController@profile');
$router->post('updateProfile', ['uses' => 'API\v1\UserController@update']); //Update User Profil
$router->post('updateUserPicture', ['uses' => 'API\v1\UserController@updateUserPicture']);//Update User Profil Picture
$router->post('uploadVideoProfile', ['uses' => 'API\v1\UserController@uploadVideoProfile']);//Update User Profil Picture
$router->post('sendCoordinate', ['uses' => 'API\v1\UserController@sendCoordinate']);//Update User Profil Picture
$router->post('getMyVideo', ['uses' => 'API\v1\UserController@getMyVideo']);//Update User Profil Picture
$router->post('setMyDefaultVideo', ['uses' => 'API\v1\UserController@setMyDefaultVideo']);//Update User Profil Picture
$router->post('deleteMyVideo', ['uses' => 'API\v1\UserController@deleteMyVideo']);//Update User Profil Picture



$router->post('explore', ['uses' => 'API\v1\ExploreController@getExplore']);//Update User Profil Picture


// Map
$router->post('getUserNearby', ['uses' => 'API\v1\NearbyController@GetUserNearby']);//Get List User NearBy
$router->post('bannerHome', ['uses' => 'API\v1\newsController@GetNews']);//Get List User NearBy 

$router->post('getHoroscope', ['uses' => 'API\v1\HoroscopeController@GetHoroscope']);//Get List User NearBy 

// $router->post('GetUserNearby', ['uses' => 'API\v1\NearbyController@GetUserNearby']);//Get List User NearBy



// friend And Match
$router->post('requestOrMatch', ['uses' => 'API\v1\FriendController@RequestOrMatch']);// Add Match to friend list or match friend
$router->post('RejectMatch', ['uses' => 'API\v1\FriendController@RejectMatch']);// Reject Match
$router->post('getListMatch', ['uses' => 'API\v1\FriendController@GetListMatch']);// Get Lust Match
$router->post('getFriendInvitation', ['uses' => 'API\v1\FriendController@GetFriendInvitation']);// Get Friend Invitation
$router->post('rejectFriendInvitation', ['uses' => 'API\v1\FriendController@rejectFriendInvitation']);// Get Friend Invitation



$router->post('Scan', ['uses' => 'API\v1\ScanController@GetScan']);// Get Friend Invitation
$router->post('ScanNow', ['uses' => 'API\v1\ScanController@GetScanNow']);// Get Friend Invitation

$router->post('multiLanguage', ['uses' => 'API\v1\multiLanguageController@GetMultiLanguage']);// Get Friend Invitation

$router->post('premiumUser', ['uses' => 'API\v1\premiumUserController@GetPopupPremiumUser']);// Get Friend Invitation






// Matches "/api/users/1 
//get one user by id
$router->get('users/{id}', 'UserController@singleUser');

// Matches "/api/users
$router->get('users', 'UserController@allUsers');

// assets
// $router->get('avatar/{msisdn}/{image}', 'API\v1\AssetsController@getAvatar');//Get One Telco by Id

//Content
$router->post('getBaseUrl', ['uses'  =>  'API\v1\baseUrlController@getBaseUrl']);//getbaseUrl
$router->post('Banner', ['uses'  =>  'API\v1\baseUrlController@getBanner']);//getbaseUrl


// sucsribe & charging
$router->post('listMenuSub', ['uses'  =>  'API\v1\listMenuController@sub']);//getbaseUrl
$router->post('checkSubscribe', ['uses'  =>  'API\v1\listMenuController@check']);
$router->post('topupList', ['uses'  =>  'API\v1\listMenuController@topupList']);//getbaseUrl

$router->post('checkQuotaExceed', ['uses'  =>  'API\v1\listMenuController@checkQuotaExceed']);
$router->post('gpay', ['uses'  =>  'API\v1\ChargingController@gpayReceive']);
$router->post('applepay', ['uses'  =>  'API\v1\ChargingController@applepayReceive']);

// dynamicLink
$router->post('dynamicLink', ['uses'  =>  'API\v1\dynamicLinkController@getdynamicLink']);

$router->post('getCoins', ['uses'  =>  'API\v1\CoinController@getMycoint']);


Route::post('/inboxList',function(){

    $data= array(
        'code' => '200', 'error_message' => 'Empty Message', 'data' => []
    );
    echo json_encode($data);
    // echo base64_decode($code);
});

Route::get('/phptime',function(){

    echo json_encode(date("Y-m-d H:i:s"));
});



// charging
$router->post('moDrListener', ['uses'  =>  'API\v1\ChargingController@moDrlistener']);

//backsound
$router->post('backsoundList', ['uses'  =>  'API\v1\BacksoundController@backsoundList']);
$router->post('addBacksound', ['uses'  =>  'API\v1\BacksoundController@addBacksound']);



// Telco
$router->get('telcos', ['uses'  =>  'API\v1\TelcoController@allTelco']);//get All Tecos
$router->post('telcos', ['uses' =>  'API\v1\TelcoController@storeTelco']);//Store New Telco
$router->get('telcos/{id}', ['uses' =>  'API\v1\TelcoController@showOneTelco']);//Get One Telco by Id
$router->put('telcos/{id}', ['uses' => 'API\v1\TelcoController@update']);//Update detail Telco
$router->delete('telcos/{id}', ['uses' => 'API\v1\TelcoController@delete']);//Delete Telco

URL::forceScheme('https');

$router->get('v1',['uses'=>'API/v1/UgcController@list']);
