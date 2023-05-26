<?php

use App\Http\Controllers\ActivitesController;
use App\Http\Controllers\TachesController;
use App\Http\Controllers\BudgetsController;
use App\Http\Controllers\DepensesController;
use App\Http\Controllers\RevenusController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TodolistController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Stmt\Return_;

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

#Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
 #   return $request->user();
#});

#
#mode instancié
#$route = new Route();
#$route ->maMethod();
#mode a la volée
#Route::maMethod(A, B);
#

//user
Route::get('/users', [UserController::class, 'index']);
Route::get('/users/{id}', [UserController::class, 'show']);
Route::post('/users', [UserController::class, 'store']);
Route::put('/users/{id}', [UserController::class, 'update']);
Route::delete('/users/{id}', [UserController::class, 'destroy']);

//todolist
Route::get('/todolist', [TodolistController::class, 'index']);
Route::get('/todolist/{id}', [TodolistController::class, 'show']);
Route::post('/todolist', [TodolistController::class, 'store']);
Route::put('/todolist/{id}', [TodolistController::class, 'update']);
Route::delete('/todolist/{id}', [TodolistController::class, 'destroy']);

//activites
Route::get('/activites', [ActivitesController::class, 'index']);
Route::get('/activites/{id}', [ActivitesController::class, 'show']);
Route::post('/activites', [ActivitesController::class, 'store']);
Route::put('/activites/{id}', [ActivitesController::class, 'update']);
Route::delete('/activites/{id}', [ActivitesController::class, 'destroy']);

//tache
Route::get('/taches', [TachesController::class, 'index']);
Route::get('/taches/{id}', [TachesController::class, 'show']);
Route::post('/taches', [TachesController::class, 'store']);
Route::put('/taches/{id}', [TachesController::class, 'update']);
Route::delete('/taches/{id}', [TachesController::class, 'destroy']);

//budgets
Route::get('/budgets', [BudgetsController::class, 'index']);
Route::get('/budgets/{id}', [BudgetsController::class, 'show']);
Route::post('/budgets', [BudgetsController::class, 'store']);
Route::put('/budgets/{id}', [BudgetsController::class, 'update']);
Route::delete('/budgets/{id}', [BudgetsController::class, 'destroy']);

//revenus
Route::get('/revenus', [RevenusController::class, 'index']);
Route::get('/revenus/{id}', [RevenusController::class, 'show']);
Route::post('/revenus', [RevenusController::class, 'store']);
Route::put('/revenus/{id}', [RevenusController::class, 'update']);
Route::delete('/revenus/{id}', [RevenusController::class, 'destroy']);

//depenses
Route::get('/depenses', [DepensesController::class, 'index']);
Route::get('/depenses/{id}', [DepensesController::class, 'show']);
Route::post('/depenses', [DepensesController::class, 'store']);
Route::put('/depenses/{id}', [DepensesController::class, 'update']);
Route::delete('/depenses/{id}', [DepensesController::class, 'destroy']);
