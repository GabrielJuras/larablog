<?php

use App\Models\Content;
use App\Models\Para;
use App\Models\Pic;
use App\View\Components\gallery;
use App\View\Components\pagination;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {

    $tavak = Content::all();
    

    return view('welcome',[
        'contents' => $tavak
    
                
    ]);
});

Route::get('/content/{id}', function ($id) {

   $content = Content::all()->find($id);

    $gallery = $content->pic;
    $para = $content->paras;
  

    
 return view('content',[
            'content'=> $content,
            'images'=> $gallery,
            'para'=>$para,
    ]);
});

