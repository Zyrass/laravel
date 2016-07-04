<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/**
 * ---------------------------------- Une Route simple
 *
 * 2 paramètres :
 * @param - 1 - La route test
 * @param - 2 - Une function anonyme
 *  ---------------------------------
 * @return un message
 */
Route::get('/test', function () {
    return 'Hello World';
});

/**
 * ---------------------------------- Une Route avec un paramètre
 *
 * Attribué un paramètre supplémentaire à ma route
 * @param - 1 - La route test2
 * @param - 1a - Entre accolade on ajoute le paramètre
 * @param - 2 - Une function
 * @param - 2a - En paramètre on ajoute une variable portant le nom du
 *               paramètre de ma route
 *  ---------------------------------
 * @return un message avec la variable concaténé
 */
Route::get('/test2/{name}', function ($name) {
    return 'Hello '. $name;
});

/**
 * ---------------------------------- Une Route avec des paramètres
 *
 * Attribué des paramètres supplémentaire à ma route
 * @param - 1 - La route test3
 * @param - 1a - Entre accolade on ajoute le paramètre
 * @param - 2 - Une function
 * @param - 2a - En paramètre on ajoute une variable portant le nom du
 *               paramètre de ma route
 * @param - 2b - En second paramètre on ajoute une variable portant le second
 *             	 paramètre de ma route
 *  ---------------------------------
 * @return un message avec les variables concaténés
 */
Route::get('/test3/{name}/{id}', function ($name, $id) {
    return 'Hello '. $name . ' ( '. $id .' ) ';
});

/**
 * ---------------------------------- Utilisé un Controller pour faire notre route
 *
 * @param - 1 - La route test4
 * @param - 1a - Entre accolade, on ajoute un name en paramètre
 * @param - 2 - On fait un appel à notre Controller : HomeController
 * @param - 2b - @ délimite l'appel et l'action
 * @param - 2c - On indique l'action soit ici test
 */
Route::get('/test4/{name}', 'TestController@test');
