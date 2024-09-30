<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- bootstrap -->
    <!-- own style -->
    <link rel="stylesheet" href="{{url('CSS/stylesheet.css')}}">
    <title>ADSCHANEL@article-title</title>
    @vite ('resources/js/app.js')
</head>
<body>
    <h1>ADSCHANEL</h1>
    <div class="cont_flex">

        <x-nav/>

        <x-search/>
        @foreach ($images as $item)
        
      
           <x-gallery :picture="$item"/>

        @endforeach
       
        

        <x-article_para :content="$content"/>

        {{$images->links('pagination::bootstrap-5')}}

    </div>
        <x-footer/>
</body>
</html>