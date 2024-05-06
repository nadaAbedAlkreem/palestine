@extends('webApplication.layouts.app')

@section('web_content')
 
<div class="containerr">
        <section class="hedsid" >
            <h6><a href="{{route('web.home')}}">{{__('dashboard.home')}} / </a></h6><h6>{{__('columns.news')}}    </h6>
        </section>
     
    <section class="allnewss">
        <div class="newss">
            <h1> {{__('columns.news')}}</h1>
         
        </div>
        

    <div class="allcardnews">
  
        <div class="allcardnews">
                          @if($CurrentLang == "ar")      
                            @if(!empty($allNews))
                                  @foreach($allNews as $news)
                                    <div class=" card cardNews " >
                                      <img src="{{url('/storage2/'.$news->images[0]->url)}}" alt="" data-tilt data-tilt-scale="1.1">
                                        <div class="card-body">
                                           <h4 class="card-title"> 
                                            <a href="{{route('web.news.index' ,['id' => $news->id])}}">
                                            <h6>{{$news->title_ar}}</h6></a> </h4>
                                             <p class="card-text">{{Illuminate\Support\Str::limit($news->description_ar , 20)}}
                                            </p>
                                            
                                        </div>
                                    </div>
                                  @endforeach  
                              @endif 
                            @else
                            @if(!empty($allNews))
                                  @foreach($allNews as $news)
                                    <div class=" card cardNews " >
                                      <img src="{{url('/storage2/'.$news->images[0]->url)}}" alt="" data-tilt data-tilt-scale="1.1">
                                      <div class="card-body">
                                            <h4 class="card-title">
                                                <a href="{{route('web.news.index' ,['id' => $news->id])}}">
                                            <h6>{{$news->title}}</h6>
                                            </a></h4>
                                            <p  class="card-text">{{Illuminate\Support\Str::limit($news->description , 20)}}</p>
                                     </div>    
                                    </div>
                                  @endforeach  
                              @endif    
                          @endif     
                        </div>
                    </div> 
                    </div>
       
       
   



</div>

<div class="pagg">
  <nav dir="ltr" aria-label="Page navigation example">
    <ul class="pagination">
      <li class="page-item">
        <a class="page-link" href="#" aria-label="Previous">
          <span aria-hidden="true">&laquo;</span>
        </a>
      </li>
      <li class="page-item"><a class="page-link" href="#">1</a></li>
      <li class="page-item"><a class="page-link" href="#">2</a></li>
      <li class="page-item"><a class="page-link" href="#">3</a></li>
      <li class="page-item">
        <a class="page-link" href="#" aria-label="Next">
          <span aria-hidden="true">&raquo;</span>
        </a>
      </li>
    </ul>
  </nav>
</div>




    </section>

    </div>
  
  
 
@endsection