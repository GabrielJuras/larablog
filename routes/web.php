<?php

use App\Models\Content;
use App\Models\Para;
use App\Models\Pic;
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

   
    $content = Arr::first(Content::all(), fn($content)=>$content['id']==$id);
    
    $para = $content->para;
    
    $images = $content->pic->toQuery()->paginate(4);
    
    dd($para);
    
    
    
    return view('content',[
        'content'=> $content,
        'images'=> $images,
        'para'=> $para
                
    ]);
});

