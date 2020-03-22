<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::apiResources([
    'Content' => 'ContentController',
    'Group' => 'GroupController',
    'ObjectType' => 'ObjectTypeController',
    'Role' => 'RoleController',
    'Subject' => 'SubjectController',
    'Task' => 'TaskController',
    'Topic' => 'TopicController',
    'ObjectType' => 'ObjectTypeController',
    'User' => 'UserController',
    'Userinteraction' => 'UserinteractionController',
]);