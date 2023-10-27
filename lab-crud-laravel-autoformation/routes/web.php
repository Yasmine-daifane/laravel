<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route:: prefix('/blog')→name ('blog. ')→group (function () {
    Route::get('/', function (Request $request) {
        return [
            "link"⇒ \route('blog.show', ['slug' => 'article', 'id' ⇒ 13]),
        ];
    })→name('index');
    Route::get('/{slug}-{id}', function (string $slug, string $id, Request $request) {
        return [
            "slug" => $slug,
            'id' => $id,
            'name' => $request-input('name'),
        ];
    })→where ([
        'id' => '[0-9]+',
        'slug' => '[a-z0-9\-]+'
    ])→name('show');
});




        //  chapitre L'orem   
    //  communiquer avec une base  de donnee avec laravel  
    // l'orem c'st le demunitif de Object Relationnel Mapping  
    // ce  sont des classes qui vont  permettre d'interagir avec les donnee en BD qui vont permettre  de  les representent  sous forme d'objet 
// a la place de creer  la table et creer les infos d'interieur  dans la ravel on a : 
// - on va utiliser le systeme  de migration 
// creer une migration qui va permettre de rajouter les infos  dans notre BD (nomme notre migration)
// php artisan make:migration create_admins_table 
