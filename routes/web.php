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
    $para = Para::all()->where('content_id','=',$id);
    $pic = Pic::all()->where('content_id','=',$id);
    // $gallery =[];
    // foreach ($content->paras as $para) {
    //      array_push($gallery, $para->paratitle, $para->para);
    //      foreach ($para->images as $image) {
    //          array_push($gallery,$image->url,$image->iname);
    //      }
    //  }
    
    dd($pic, $para);
    
    return view('content',[
           'gallery'=> $gallery,
                
    ]);
});

