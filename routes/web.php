<?php

use App\Models\Content;
use App\Models\Para;
use App\Models\Pic;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
     return view('welcome',[
        'contents' =>Content::all(),
        
                
    ]);
});

Route::get('/content/{id}', function ($id) {

    

    $content = Arr::first(Content::all(), fn($content)=>$content['id']==$id);
    $images = Pic::all();
    
    return view('content',[
        'content'=> $content,
        'images'=> $images
                
    ]);
});

