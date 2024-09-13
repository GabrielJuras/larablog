<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- own style -->
    <link rel="stylesheet" href="{{url('CSS/stylesheet.css')}}">
    <title>ADSCHANEL@article-title</title>
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

        <x-pagination/>

    </div>
        <x-footer/>
</body>
</html>