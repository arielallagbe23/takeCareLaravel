<?php


use App\Http\Controllers\PaiementEffectueController;
use App\Http\Controllers\PaiementRecuController;
use App\Http\Controllers\RdvController;
use App\Http\Controllers\OrdonanceController;
use App\Http\Controllers\AndsomeController;
use App\Http\Controllers\ArticleController; 
use App\Http\Controllers\RealCommandeController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome-view');
});

//Tout ce qui ne releve pas d'une element type objet 

Route::get('/welcome-view',[AndsomeController::class,'welcomeView']);

Route::get('/paiementone',[AndsomeController::class,'getPaiementone']);

Route::get('/add-paiement',[AndsomeController::class,'getaddPaiement']);

//Les routes pour les articles 

Route::get('/add-article',[ArticleController::class,'addArticle']);

Route::get('/all-article',[ArticleController::class,'allArticles']);

Route::post('/add-article',[ArticleController::class,'storeArticle'])->name('article.store');

Route::get('/edit-article/{id}',[ArticleController::class,'editArticle']);

Route::post('/update-article',[ArticleController::class,'updateArticle'])->name('article.update');

Route::get('/delete-article/{id}',[ArticleController::class,'deleteArticle']);

//Les routes pour les ordonances

Route::get('/all-ordonances',[OrdonanceController::class,'allOrdonances']);

//Les routes pour les RDVs

Route::get('/all-rdv',[RdvController::class,'getRdvs2']);

//Les routes pour les paiements


Route::get('/add-paiementrecu',[PaiementRecuController::class,'getaddPaiementrecu']);

Route::get('/all-paiementrecu',[PaiementRecuController::class,'allPaiementRecu']);

Route::get('/delete-paiementrecu/{id}',[PaiementRecuController::class,'deletepaiementrecu']);



Route::get('/all-paiement',[PaiementRecuController::class,'allPaiement']);

Route::get('/all-paiement2',[PaiementEffectueController::class,'allPaiement2']);


Route::post('/add-paiementeffectue',[PaiementEffectueController::class,'getaddPaiementEffectue']);

Route::get('/all-paiementeffectue',[PaiementEffectueController::class,'allPaiementEffectue']);

Route::get('/delete-paiementeffectue/{id}',[PaiementEffectueController::class,'deletepaiementEffectue']);

Route::get('delete-paiementeffectue/{id}',[PaiementEffectueController::class,'deletepaiementeffectue2']);

// Les routes en liens avec les paniers

