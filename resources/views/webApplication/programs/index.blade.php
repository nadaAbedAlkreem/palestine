@extends('webApplication.layouts.app')

@section('web_content')
<link rel="stylesheet" href="{{url('css/news.css')}}" />
<link rel="stylesheet" href="{{url('css/Program_Details.css')}}" />

 


@if(!empty($ProgramsDetails))
           @if($CurrentLang == "en")
            <div class="containerr"> 
                        <section class="hedsid" >
                            <h6><a  href="{{route('web.home')}}">{{__('dashboard.home')}}  / </a><a href="{{route('programs.all')}}"> / {{__('columns.programs')}}</a></h6><h6> {{$ProgramsDetails->title}}   </h6>
                        </section>

                        <section class="allnewss">
                            <div class="newss">
                                <h1>{{$ProgramsDetails->title}}</h1>
                                <p>{{$ProgramsDetails->brief}}</p>
                            </div>

                            <div class="bodyprogdetails">
                            <h3>{{__('columns.strategic_objective')}}:</h3>
                            <p>{{$ProgramsDetails->strategic_objective}} </p>

                            <h3>{{__('columns.special_objectives')}}:</h3>
                            <p>{{$ProgramsDetails->special_objectives}} </p>


                            <h3 style="margin-top: 10px;color: black; margin-bottom: 10px;">{{__('columns.ativities_events')}}:  </h3>
                                            
                            <ol>
                                <li> {{$ProgramsDetails->ativities_events}}</li>
                    
                            </ol>
                        </article>

                    </div>

                    <div class="program_more">

                    <h2>{{__('columns.programs')}} :</h2>

                    <div class="allcardnews">
                    @if(!empty($allPrograms)) 
                    @foreach($allPrograms as $program)
                        <div class=" card cardNews ">
                            <img src="{{url('/storage2/.$program->image')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                            <a href="{{route('programs.details',$program->id)}}"><h5 class="card-title">{{$program->title}}</h5></a>
                            <p class="card-text">{{$program->brief}}
                            </p>
                            </div>
                        </div>
                        @endforeach
                        @endif
                    </div>
                        </div>
                        </section>

            </div>

            @else

            <div class="containerr"> 
                        <section class="hedsid" >
                            <h6><a  href="{{route('web.home')}}">{{__('dashboard.home')}}  / </a><a href="{{route('programs.all')}}"> / {{__('columns.programs')}}</a></h6><h6> {{$ProgramsDetails->title_ar}}    </h6>
                        </section>

                        <section class="allnewss">
                            <div class="newss">
                                <h1>{{$ProgramsDetails->title_ar}}</h1>
                                <p>{{$ProgramsDetails->brief_ar}}</p>
                            </div>

                            <div class="bodyprogdetails">
                            <h3>{{__('columns.strategic_objective')}}:</h3>
                            <p>{{$ProgramsDetails->strategic_objective_ar}} </p>

                            <h3>{{__('columns.special_objectives')}}:</h3>
                            <p>{{$ProgramsDetails->special_objectives_ar}} </p>


                            <h3 style="margin-top: 10px;color: black; margin-bottom: 10px;">{{__('columns.ativities_events')}}:  </h3>
                                            
                            <ol>
                                <li> {{$ProgramsDetails->ativities_events_ar}}</li>
                    
                            </ol>
                        </article>

                    </div>

                    <div class="program_more">

                        <h2>{{__('columns.programs')}} :</h2>

                            <div class="allcardnews">
                               @if($CurrentLang == "ar") 
                                    @if(!empty($latestPrograms)) 
                                    @foreach($latestPrograms as $program)
                                        <div class=" cardpro ">
                                            <img src="{{url('/storage2/'.$program->image)}}" class="card-img-top" alt="...">
                                            <div class="card-body">
                                            <a href="{{route('programs.details',$program->id)}}"><h5 class="card-title">{{$program->title_ar}}</h5></a>
                                            <p class="card-text">{{$program->brief_ar}}
                                            </p>
                                            </div>
                                        </div>
                                    @endforeach
                                    @endif

                                @else 
                                @if(!empty($latestPrograms)) 
                                    @foreach($latestPrograms as $program)
                                        <div class=" cardpro ">
                                            <img src="{{url('/storage2/'.$program->image)}}" class="card-img-top" alt="...">
                                            <div class="card-body">
                                            <a href="{{route('programs.details',$program->id)}}"><h5 class="card-title">{{$program->title}}</h5></a>
                                            <p class="card-text">{{$program->brief}}
                                            </p>
                                            </div>
                                        </div>
                                    @endforeach
                                    @endif
                                @endif

                            </div>
                    </div>



                    
                        </section>

            </div>


            @endif
@endif

  




@endsection