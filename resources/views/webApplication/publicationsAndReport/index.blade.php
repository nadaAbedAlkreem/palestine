@extends('webApplication.layouts.app')

@section('web_content')
 <link rel="stylesheet" href="{{url('css/publications_and_reports.css')}}">

<div class="containerr">
    <section class="hedsid" >
    <h6><a href="{{route('web.home')}}">{{__('dashboard.home')}} / </a></h6><h6> {{__('dashboard.publications_and_Reports')}}  </h6>
    </section>

    <section class="allnewss">
        <div class="newss">
            <h1> {{__('dashboard.publications_and_Reports')}}</h1>
        </div>

        <div class="allcardspiblicationsss">
            @if(!empty($PublicationDetails))
                     <div class="cardpubb">
                        <a href="" download="{{$PublicationDetails->file}}">
                        <img src="{{url('/storage2/'.$PublicationDetails->images)}}" alt="">
                        <p class="popcc"></p>
                        <?php $title_lang = ($CurrentLang == "en")?  "title" : "title_ar"   ;  ?>
                            <p class="textcardpop">{{$PublicationDetails->$title_lang}}</p>                     </a>
                    </div>
             @endif    
        </div>

     

    </section>

    </div>
  



@endsection