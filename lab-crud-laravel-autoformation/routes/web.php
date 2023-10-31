<?php

use GuzzleHttp\Psr7\Request;
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


/*
les controllers sont des class d'objectif de regrouper les fonction qui vont contenir la logic php


*/
Route::get('/', function () {
    return view('welcome');
});



Route::prefix('/blog')->name('blog.')->group(function()  {
  Route::get('/' ,function (Request $request) {
      // sauvgarde des donner 
      // $admin = new \App\Models\Admin();
      // $admin->title = 'yasmine';
      //   $admin ->slug = 'me';
      //    $admin-> content = 'le admin de cette interface est yasminele admin de cette interface est yasmine';
      //     $admin->save();

      //      return $admin ;
        // rucuperer les donner 
      //    return \App\Models\Admin::all(['title','id', 'content']) ;
              //    $posts = \App\Models\Admin::all(['title','id', 'content']) ;
                  //  $posts = \App\Models\Admin::paginate(2 ,['id', 'title']) ;
                  //  $posts = \App\Models\Admin::where('id' , '>' , 1)->limit(1)->get();

          //    $posts = \App\Models\Admin::find(2) ;
          //    modifier title 
          //    $posts-> title = 'New title';
          //    methode classique delete ,save 
          //    $posts-> delete() ;
              //  dd($posts[0] ->title );
              // dd($posts -> first());
              // $posts = \App\Models\Admin::Create([
              //     'title'=> 'mon nouveau' ,
              //     'slug'=> 'neauveau ' ,
              //     'content' => 'neauveau contenu ' 

              // ]) ;
            $posts = \App\Models\Admin::where( 'id' ,'>',0)->update([
              'title' => 'mon',
             'content' => 'neauveau contenu ' 

            ]) ;
    

              dd($posts) ;
              //   return ($posts) ;
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