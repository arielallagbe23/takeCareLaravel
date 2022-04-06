<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AndsomeController;
use App\Http\Controllers\OrdonanceController;
use App\Http\Controllers\PaiementEffectueController;
use App\Http\Controllers\RdvController;
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

Route::get('/bienvenue-admin',[AndsomeController::class,'bienvenue']);

Route::get('/add-article',[ArticleController::class,'addArticle']);

Route::post('/add-article',[ArticleController::class,'storeArticle'])->name('article.store');

Route::get('/all-articles',[ArticleController::class,'allArticles']);

Route::get('/all-articles2',[ArticleController::class,'allArticles2']);

Route::get('/edit-article/{id}',[ArticleController::class,'editArticle']);

Route::post('/update-article',[ArticleController::class,'updateArticle'])->name('article.update');

Route::get('/delete-article/{id}',[ArticleController::class,'deleteArticle']);

Route::get('/article/image/{imageName}',[ArticleController::class,'getImage']);

// Les routes pour les ordonnaces 

Route::get('/ordonances',[OrdonanceController::class,'getOrdonances']);

Route::get('/ordonances/{id}',[OrdonanceController::class,'getOrdonancesId']);

Route::post('/add-ordonance',[OrdonanceController::class,'addOrdonance']);

Route::put('update-ordonance/{id}',[OrdonanceController::class,'updateOrdonance']);

Route::get('delete-ordonance/{id}',[OrdonanceController::class,'deleteOrdonance']);

Route::get('delete-ordonance2/{id}',[OrdonanceController::class,'deleteOrdonance2']);

// Les routes pour les rdv 

Route::post('/add-rdv',[RdvController::class,'addrdv']);

Route::get('/rdvs',[RdvController::class,'getRdvs']);

Route::get('/rdvs2',[RdvController::class,'getRdvs2']);

Route::get('/rdv/{id}',[RdvController::class,'getRdvId']);

Route::get('delete-rdv/{id}',[RdvController::class,'deleteRdv']);

// les routespour les paiements

Route::post('/add-paiementeffectue',[PaiementEffectueController::class,'getaddPaiementEffectue']);


