
@extends('webApplication.layouts.app')

@section('web_content')

<link rel="stylesheet" href="{{url('css/programs.css')}}">

   <div class="containerr">
        <section class="hedsid" >
            <h6><a href="{{route('web.home')}}">{{__('dashboard.home')}} / </a></h6><h6>{{__('dashboard.programs')}}    </h6>
        </section>

        <section class="allnewss">
            <div class="newss progr ">
                <h1>{{__('columns.programs')}}</h1>
                <div class="cardsside">
                    <h5>{{__('dashboard.resultSearch')}}</h5>
                    <div class="cardd">                  
                        <div class="rightside">
                            <div class="allcardpro">
                          @if($CurrentLang == "ar")      
                            @if(!empty($ProgramsSearch))
                                  @foreach($ProgramsSearch as $programs)
                                    <div class="cardpro" >
                                      <img src="{{url('/storage2/'.$programs->image)}}" alt="" data-tilt data-tilt-scale="1.1">
                                      <h4> <a href="{{route('programs.details' ,['id' => $programs->id])}}">
                                      <h6>{{$programs->title_ar}}</h6>
                                      </a></h4>
                                      <p>{{$programs->brief_ar}} </p>
                                    </div>
                                  @endforeach  
                              @endif 
                            @else
                            @if(!empty($ProgramsSearch))
                                  @foreach($ProgramsSearch as $programs)
                                    <div class="cardpro" >
                                      <img src="{{url('/storage2/'.$programs->images)}}" alt="" data-tilt data-tilt-scale="1.1">
                                      <h4> <a href="{{route('programs.details' ,['id' => $programs->id])}}">
                                      <h6>{{$programs->title}}</h6>
                                      </a></h4>
                                      <p>{{$programs->brief}}</p>
                                    </div>
                                  @endforeach  
                              @endif    
                          @endif     
                        </div>
                    </div> 
                    </div>
                    <div class="navigation" >
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
                </div>
            </div>        
        </section>
    
    </div>



@endsection
