

    
      <div class="col">
        <div class="card h-100">
          
                      
          <img src={{$item->pic[0]->url}} class="card-img-top" alt="" >
  
         
          <div class="card-body">
            <h5 class="card-title"><a class="title" href="/larablog/public/content/{{$item['id']}}">{{$item['title']}}</a></h5>
            <p class="card-text">{{ $item->para[0]->para }}</p>
          </div>
          <div class="card-footer">
            <small class="text-body-secondary">trhw</small>
          </div>
        </div>
      </div>