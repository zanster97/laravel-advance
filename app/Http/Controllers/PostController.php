<?php

namespace App\Http\Controllers;

// use App\Http\Middleware\CheckRoleMiddleware;
use Illuminate\Http\Request;
// use Illuminate\Routing\Controllers\HasMiddleware;
// use Illuminate\Routing\Controllers\Middleware;

class PostController extends Controller //implements HasMiddleware
{
    // public static function middleware()
    // {
    //     return[new Middleware(CheckRoleMiddleware::class, only: ['store'],except:['index'])];
    // }

    function store(Request $request) {
        dd($request->all());
    }

    function index(){
       return view('post.index');
    }
}
