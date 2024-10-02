<?php

use App\Models\Content;
use App\Models\Para;
use App\Models\Pic;
use App\View\Components\pagination;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
     return view('welcome',[
        'contents' =>Content::all(),
        
                
    ]);
});

Route::get('/content/{id}', function ($id) {

    
    
    
    $content = Arr::first(Content::all(), fn($content)=>$content['id']==$id);
    
    $images = Arr::get(Content::all(), $id-1)->pic;
    $content_para=array();

    foreach ($images as $item) {
        array_push($content_para, $item['para_id']);
    };
    $para=Pic::all();
    dd($content_para);
    
    return view('content',[
        'content'=> $content,
        'images'=> $images,
        'para'=> $para
                
    ]);
});

