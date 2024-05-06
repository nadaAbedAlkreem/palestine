@extends('webApplication.layouts.app')

@section('web_content')
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css"
/>





<div class="containerr">
    <section class="hedsid">
    <h6><a href="{{route('web.home')}}">{{__('dashboard.home')}} /
    <a href="{{route('visualLibraries.all')}}">  {{__('dashboard.visual_libraries')}} / </a>
    <h6> {{__('dashboard.visual_libraries')}} </h6>
    </section>
            @if(!empty($visualLibrariesdetails))
                    <?php  
                            $title_lang = ($CurrentLang == "en") ? "title":  "title_ar"  ;   
                            $description_lang = ($CurrentLang == "en") ? "description":  "description_ar"  ;   
                    ?>              
                <section class="allnewss">
                        <div class="newss">
                            <h1>{{$visualLibrariesdetails->$title_lang}}</h1>
                        </div>
                        <div class="textalbomdet">
                            <p>{{$visualLibrariesdetails->$description_lang}}</p>
                        </div>
                    
                                <div class="allcardlib">
                           
                                    <div class="cardslaib ">
                                    @if(!empty($visualLibrariesdetails->images))
                                        @foreach($visualLibrariesdetails->images as $image) 
                                            <div class="imgbig" href="/storage2/.$image->url"  data-fancybox="gallery">
                                                <img class="imgbodyDetails" src="{{url('/storage2/'.$image->url)}}" alt="" />
                                            </div>
                                        @endforeach   
                                    @endif 
                             
                                    </div>
                         
                                </div>
                      
                </section>
            @endif    
      
</div>

@endsection