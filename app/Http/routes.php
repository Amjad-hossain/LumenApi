<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', function () use ($app) {
    return $app->version();
});


$app->get('api/household','HouseHoldActivitiesController@index');

$app->get('api/household/{id}','HouseHoldActivitiesController@getHouseHoldActivities');

$app->post('api/household','HouseHoldActivitiesController@saveHouseHoldActivities');

$app->put('api/household/characteristics/{id}','HouseHoldActivitiesController@updateHouseHoldCharacteritics');

$app->put('api/household/injurymorbidity/{id}','HouseHoldActivitiesController@updateInjuryMorbidity');

$app->put('api/household/suicideattemptactivity/{id}','HouseHoldActivitiesController@updateHouseHoldSuicideAttemptActivity');

$app->put('api/household/deathconfirmation/{id}','HouseHoldActivitiesController@updateHouseHoldDeathConfirmation');

$app->delete('api/household/{id}','HouseHoldActivitiesController@deleteHouseHoldActivities');




$app->get('api/injuryactivity','InjuryMortalityController@index');

$app->get('api/injuryactivity/{id}','InjuryMortalityController@getInjuryActivities');

$app->post('api/injuryactivity','InjuryMortalityController@createInjuryMortality');

$app->put('api/injuryactivity/roadtransportinjury/{id}','InjuryMortalityController@updateInjuryMortalityForRoadTransportInjuryActivity');


