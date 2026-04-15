<?php

use App\Models\Address;
use App\Models\Country;
use App\Models\Post;
use App\Models\State;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/joins',function(){
    // $usersWithOders = \DB::table('users')
    //     ->join('orders','users.id','=','orders.user_id') //inner join
    //     ->select('users.*','orders.product_name')
    //     ->get();

    // $usersWithOders = \DB::table('users')
    //     ->leftjoin('orders','users.id','=','orders.user_id') //left join
    //     ->select('users.*','orders.product_name')
    //     ->get();

    // $ordersWithusers = \DB::table('orders')
    //     ->rightjoin('users','users.id','=','orders.user_id') //right join
    //     ->select('users.*','orders.product_name')
    //     ->get();
    //fulljoins
    // $usersWithOders = \DB::table('users')
    //     ->leftjoin('orders','users.id','=','orders.user_id') //left join
    //     ->select('users.*','orders.product_name')
    //     ->unionAll(
    //         \DB::table('users')
    //         ->rightJoin('orders','users.id','=','orders.user_id')//right join
    //         ->select('users.*','orders.product_name')
    //     )->get();
    // dd($usersWithOders);
});

Route::get('/users',function (){
    $users = User::all();
    $address = Address::all();
   return view('test',compact('users','address'));
});

Route::get('/posts',function(){
    // Tag::insert([
    //     [
    //         'name' => 'Tag 1'
    //     ],
    //     [
    //         'name' => 'Tag 2'
    //     ],
    //     [
    //         'name' => 'Tag 3'
    //     ],
    //     [
    //         'name' => 'Tag 4'
    //     ],
    //     [
    //         'name' => 'Tag 5'
    //     ],
    //     [
    //         'name' => 'Tag 6'
    //     ],
    //     [
    //         'name' => 'Tag 7'
    //     ]

    // ]);
    $post=Post::first();
    // $tag=Tag::first();

    // $post->tags()->attach($tag);// record insert in relation tables
    // $post->tags()->dettach($tag);// record delete in relation tables
    // $post->tags()->sync($tag);// record overwritten with passed value in relation tables

    $posts = Post::all();
    return view('post',compact('posts'));
});

Route::get('/tags',function (){
    $tags = Tag::all();
    return view('tag',compact('tags'));
});

Route::get('location', function () {
    // $country = new Country(['name' => 'India']);
    // $country->save();
    // $state=new State(['name' => 'Goa']);
    // $country->states()->save($state);
    // $state->cities()->createMany([
    //     ['name'=>'Panjim'],
    //     ['name'=>'Margoa']
    // ]);
    $country=Country::first();
    return view('location',compact('country'));
});

Route::get('image', function(){
    // $user=User::find(1);
    // $user->image()->create([
    //     'path' => '/uploads/user_one.jpg'
    // ]);

    // $user=Post::find(1);
    // $user->image()->create([
    //     'path' => '/uploads/post_one.jpg'
    // ]);

    // return $user->image; //for user image
});
