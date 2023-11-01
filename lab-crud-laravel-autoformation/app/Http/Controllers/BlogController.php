<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;



class BlogController extends Controller
{
    public function index():View {

        $post= Admin::paginate(25) ;
        // conventio
        return view('blog.index') ;
    }

 
    public function show(string $slug ,string $id):RedirectResponse | Admin {
        $post= Admin::findOrFail($id);
        if ($post->slug !== $slug) {
            // dd($post->slug , $slug);
            return to_route('blog.show', ['slug' => $post->slug, 'id' => $post->id]);
            // dd($test);
        }
        
    return $post;
       
    }
}
