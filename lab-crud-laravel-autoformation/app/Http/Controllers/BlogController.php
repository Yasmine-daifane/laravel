<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index ():Paginator{

        return \App\Models\Admin::paginate(25) ;
    }
 
    
}
