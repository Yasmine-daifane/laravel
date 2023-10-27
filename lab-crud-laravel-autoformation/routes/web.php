<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request; 

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
/*
on va creer un nouvelle admin  on intialise notre admin 
on va affexter les propieter de cet objet (admin)
sauvgarder les donner using methode save dans notre BD 
notre BD sqlite view : https://sqliteviewer.app/?ref=vscode#/database.sqlite/table/admins/
le slug est utile just pour la creation de un seul admin une seul fois il est unique 
utilise Post pour recuperer des infos par exemple recuperer tous les admin depuis ma DB 
*/

// {"title":"yasmine","slug":"mon int","content":"le admin de cette interface est yasminele admin de cette interface est yasmine",
    // "updated_at":"2023-10-27T14:48:59.000000Z","created_at":"2023-10-27T14:48:59.000000Z","id":4}

Route::get('/', function () {
    return view('welcome');
});


            Route::prefix('/blog')->name('blog.')->group(function()  {
                Route::get('/' ,function (Request $request) {

                    $admin = new \App\Models\Admin();
                    $admin->title = 'yasmine';
                      $admin ->slug = 'me';
                       $admin-> content = 'le admin de cette interface est yasminele admin de cette interface est yasmine';
                        $admin->save();

                         return $admin ;
                    return [
                        "link" => \route('blog.show',['slug' => 'article' ,'id'=> 16]),
    
                    ];
                   
                })->name('index');
             
                Route::get('/{slug}/{id}', function (string $slug ,string $id, Request $request ) {
                 
    
                    return [
                      "slug" => $slug ,
                      'id' => $id ,
                      'name'  =>$request ->input ('name'),
                
    
                    ];

                })->where([
                 'id' => '[0-9]+',
                 'slug' => '[a-z0-9\-]+'
    
                ])->name('show');
        
         }); 
          
    




           
        








        //  chapitre L'orem   
    //  communiquer avec une base  de donnee avec laravel  
    // l'orem c'st le demunitif de Object Relationnel Mapping  
    // ce  sont des classes qui vont  permettre d'interagir avec les donnee en BD qui vont permettre  de  les representent  sous forme d'objet 
// a la place de creer  la table et creer les infos d'interieur  dans la ravel on a : 
// - on va utiliser le systeme  de migration 
// creer une migration qui va permettre de rajouter les infos  dans notre BD (nomme notre migration)
// php artisan make:migration create_admins_table 
