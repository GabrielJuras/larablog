<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{url('CSS/stylesheet.css')}}">
    <title>ADSCHANEL@article-title</title>
    @vite (['resources/js/app.js'])
</head>
<body>
    <h1>ADSCHANEL</h1>
    <div class="cont_flex" >
    <x-nav/>
    <x-search/>
    <div class="row row-cols-1 row-cols-md-3 g-4 mx-5">
    @foreach ($contents as $item)
    <x-content_cont :item="$item"  />
    @endforeach
    </div>
    </div>
    <x-footer/>
</body>
</html>