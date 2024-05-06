@extends('webApplication.layouts.app')

@section('web_content')



<div class="containerr">
    <section class="hedsid" >
    <h6><a href="{{route('web.home')}}">{{__('dashboard.home')}} / </a></h6><h6> {{__('dashboard.publications_and_Reports')}}  </h6>
    </section>

    <section class="allnewss">
        <div class="newss">
            <h1> {{__('dashboard.publications_and_Reports')}}</h1>
        </div>

        <div class="allcardspiblicationsss">
                @if(!empty($PublicationsAndReports))
                    @foreach($PublicationsAndReports as $publicationsAndReports)
                        <div class="cardpubb">
                            <a href="" download="{{$publicationsAndReports->file}}">
                            <img src="{{url('/storage2/'.$publicationsAndReports->images)}}" alt="...">
                            <p class="popcc">{{$publicationsAndReports->created_at}}</p>
                               <?php $title_lang = ($CurrentLang == "en")?  "title" : "title_ar"   ;  ?>
                            <p class="textcardpop">{{$publicationsAndReports->$title_lang}}</p>    
                             
                        </a>
                        </div>
                        
                   
                        
                    @endforeach    
                @endif    

          
         
           

        </div>

     

    </section>

    </div>
  




@endsection