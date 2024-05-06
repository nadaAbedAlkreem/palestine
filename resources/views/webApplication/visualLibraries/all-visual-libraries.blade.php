@extends('webApplication.layouts.app')

@section('web_content')
<!-- <link rel="stylesheet" href="{{url('css/news.css')}}" /> -->


<div class="containerr">
    <section class="hedsid">
    <h6><a href="{{route('web.home')}}">{{__('dashboard.home')}} /
      <h6> {{__('dashboard.visual_libraries')}} </h6>
    </section>

    <section class="allnewss">
      <div class="newss">
        <h1>{{__('dashboard.visual_libraries')}}</h1>
      </div>


      <div class="allcardnews">
          
            @if(!empty($VisualLibraries))
                @foreach($VisualLibraries as $visualLibraries)
                    <div class=" card cardNews ">
                    <a href="{{route('web.visualLibraries.index' , ['id' => $visualLibraries->id])}}">
                    <img src="{{url('/storage2/'.$visualLibraries->image)}}"  class="card-img-top" alt="...">
                        <div class="card-body">
                        <?php  
                        $title_lang = ($CurrentLang == "en") ? "title":  "title_ar"  ;   
                        $description_lang = ($CurrentLang == "en") ? "description":  "description_ar"  ;   
                        ?> 
                            <h5 class="card-title">{{$visualLibraries->$title_lang}}</h5>
                            <p class="card-text">{{Illuminate\Support\Str::limit($visualLibraries->$description_lang , 50)}}
                            </p>


                        </div>
                    </a>
                    </div>
                @endforeach    
            @endif        
    
     

      

      </div>

@endsection