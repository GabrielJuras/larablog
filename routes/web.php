<?php

use App\Models\Content;
use App\Models\Para;
use App\Models\Pic;
use App\View\Components\pagination;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
     return view('welcome',[
        'contents' =>Content::all(),
        
                
    ]);
});

Route::get('/content/{id}', function ($id) {

    
    $para=Para::all();
    $content = Arr::first(Content::all(), fn($content)=>$content['id']==$id);
  
    $images = Arr::get(Content::all(), $id-1)->pic->toQuery()->paginate(4);
    
    
    return view('content',[
        'content'=> $content,
        'images'=> $images
                
    ]);
});

