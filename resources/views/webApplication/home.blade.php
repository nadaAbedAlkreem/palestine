@extends('webApplication.layouts.app')

@section('web_content')
<header class="heade">
      <div class="back_heder"></div>
      <div class="">

        <div class="slide_heder" >
          <!-- Swiper -->
          <div class="swiper mySwiper arow d-flex">
            <div class="swiper-wrapper ">
              @if(!empty($sliders))
                @foreach($sliders as $slider)
                <div class="swiper-slide centerimgheder">
                  <img src="{{url('/storage2/'. $slider->image)}}" alt="">
                  <img class="shado" src="{{url('imges/Program icons/Rectangle 1502.png')}}" alt="">
                  <div class="textimg textimg1 animate__animated animate__fadeInUp">
                    @if($CurrentLang == "en")
                    <h1>{{$slider->title}}</h1>
                    <p>{{$slider->description}}</p>
                    @else 
                    <h1>{{$slider->title_ar}}</h1>
                    <p>{{$slider->description_ar}}</p>
                    @endif
                    @if($slider->rediract_to != null)
                    <?php  $style = ($slider->active == 0)? "mored": "usbtn" ;
                           $route = ($slider->redirect_to == "contact_us") ? 'contactUs.home' : 'contactUs.home' ; 
                    ?>

                    @if($slider->news  != null )
                     
                    <form method="get" action="{{ route('web.news.index' , ['id' => $slider->news->id])}}">
                    <button type="submit" class={{$style}}> {{$slider->text_button}} </button>
                    </form>
                    @endif
                    @endif
                   </div>
                </div>
                @endforeach
              @endif
 
        </div>
        <div class="next "><i class='bx bx-right-arrow-alt'></i></div>
        <div class="prev"><i class='bx bx-left-arrow-alt'></i></div>
        <div class="swiper-pagination"></div>
      </div>
      </div>
      </div>

    </header>

    <section class="news  ">
      <div class="containerr">
        <div class="textnews">
          <h1>{{__('setting.latest_news')}}</h1>
          <a href="{{route('news.all')}}"><h6>{{__('setting.view_all')}}</h6></a>
        </div>     
          <div class="swiper mySwiper2">
          <div class="swiper-wrapper ">
            @if(!empty($latestNews))
            @foreach($latestNews as $latestNew )
            <a href="{{route('web.news.index' , ['id'=> $latestNew->id])}}"> 
              <div class=" card cardNews swiper-slide">
                <img src="{{url('/storage2/'. $latestNew->images[0]->url)}}" class="card-img-top" alt="...">
                <div class="card-body">
                @if($CurrentLang == "en") 
                    <a href="{{route('web.news.index' ,['id' => $latestNew->id])}}"><h5 class="card-title">{{$latestNew->title}}</h5></a>
                    <p class="card-text">{{ Illuminate\Support\Str::limit($latestNew->description, 50) }}</p>
                @else 
                    <a href="{{route('web.news.index' ,['id' => $latestNew->id])}}"><h5 class="card-title">{{$latestNew->title_ar}}</h5></a>
                    <p class="card-text">{{ Illuminate\Support\Str::limit($latestNew->description_ar, 50) }}</p>
                @endif


                </div>
              </div>
            </a>
            @endforeach
            @endif     
 
 
 
          </div>
          <div class="swiper-pagination"></div>
        </div>

    </section>

    <section class="association_pro">
      <div class="containerr">
        <div class="textnews">
          <h1>{{__('setting.association_programs')}}</h1>
          <a href="{{route('programs.all')}}"><h6>{{__('setting.view_all')}}</h6></a>
        </div>

        <div class="allcardpro">
          @if(!empty($programs))
            @foreach($programs as $program)
              <a href="{{route('programs.details' , ['id' => $program->id])}}">
              <div class="cardpro" >
                  <img src="{{url('/storage2/'.$program->image)}}" alt="" data-tilt data-tilt-scale="1.1">
                 @if($CurrentLang == "en")   
                  <h4><a href="{{route('programs.details' , ['id' => $program->id])}}">{{$program->title}}</a></h4>
                  <p>{{$program->brief}}</p>
                  @else 
                  <h4><a href="{{route('programs.details' , ['id' => $program->id])}}">{{$program->title_ar}}</a></h4>
                  <p>{{$program->brief_ar}}</p>
                 @endif
              </div>
              </a>
            @endforeach
          @endif
       

        
        </div>

      </div>
    </section>



    <section class="count_sec" id="count_sec">
      <div class="containerr">
        <div class="textnews">
          <h1>{{__('setting.Most_notable_achievements')}}</h1>
        </div>

        <div class="allcardpro">
         @if(!empty($achievements))
          @foreach($achievements as $achievement)
            <div class="cardpro crad_achievements">
              <img src="{{url('/storage2/'.$achievement->image)}}" alt="" data-tilt data-tilt-scale="1.1">
                 <h3 > <?php  ($CurrentLang == "en") ? $achievement->title : $achievement->title_ar ?></h3>
               <div class="con">
                  <h2  class="counter" data-target="{{$achievement->count}}"></h2><h2>+</span>
                </div>
            </div>
          @endforeach
         @endif

        </div>

      </div>
    </section>


    <section class="comp_section">
      <div class="containerr">
        <div class="textnews">
          <h1>{{__('dashboard.partners')}}</h1>
        </div>

        <div class="arow3">
          <div class="swiper mySwiper3">
            <div class="swiper-wrapper ">
              @if(!empty($partners))
                @foreach($partners as $partner)
                  <div class="swiper-slide">
                    <div class="card_comp">
                      <img src="{{url('/storage2/'.$partner->images)}}" alt="">
                    </div>
                  </div>
                  @endforeach
              @endif  
            </div>
            <div class="swiper-pagination"></div>
          </div>

          <div class="nextt "><i class='bx bx-right-arrow-alt'></i>
            <h5>السابق</h5>
          </div>
          <div class="prevt"><i class='bx bx-left-arrow-alt'></i>
            <h5>التالي</h5>
          </div>


        </div>



      </div>
    </section>
@endsection
