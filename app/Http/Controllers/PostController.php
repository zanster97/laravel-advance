<?php

namespace App\Http\Controllers;

// use App\Http\Middleware\CheckRoleMiddleware;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

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
    //    return view('post.index');
    //    $posts= Post::where('user_id', Auth::user()->id)->get();
    //    $posts= Post::all();
    //    return view('post',compact('posts'));
    // return redirect()->action([PostController::class, 'create']);
    // return redirect()->away('https://www.oogle.com');
    //json res
    // return response()->json([
    //     'name' => 'test',
    //     'state' => 'test'
    // ]);
    // return [
    //     'name' => 'test',
    //     'state' => 'test'
    // ];
    //dowload
    // return response()->download(public_path('upload/e67eb556-f125-4e24-95ad-8aff21b9926a.jpg'));
    return response()->file(public_path('upload/e67eb556-f125-4e24-95ad-8aff21b9926a.jpg'));

    }

    function edit(string $id){
    //    return view('post.index');
    //    $posts= Post::findOrFail($id);
    //    if (! Gate::allows('update-post', $posts)) {
    //         abort(403);
    //    }
    //    Gate::authorize('update-post',$posts);
    //    Gate::authorize('update',$posts); //policy
    //    return view('post.edit',compact('posts'));

    }

    function create(){
        dd('Create method');
    }
}
