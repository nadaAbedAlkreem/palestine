
<footer class="footer">

<div class="containerr">

  <div class="allfooter">
    <div class="rightfooter">
      <h5>{{__('setting.information_us')}}</h5>
      <?php
      $data = getDataSetting();
      $current_lang = $data['CurrentLang'] ; 
      ?>
       @foreach($data['settings'] as $setting) 
        @if($current_lang == "ar")   
          @if($setting->key == "about_us_ar")
            <p> {{$setting->value}} </p>
          @endif 
        @else   
          @if($setting->key == "about_us") 
            <p> {{$setting->value}} </p>
          @endif  
        @endif  
       @endforeach

   
     

      <div>
        
        <h5>
          {{__('columns.location')}}
        </h5>
      
        <div class="point">
          <div class="imgpoint">
            <img src="{{url('imges/Group 7813.png')}}" alt="">
          </div>
          @foreach( $data['settings'] as $setting)
          @if($current_lang == "ar")
            @if($setting->key == "loaction_ar")
            <p> {{$setting->value}} </p>
            @endif 
          @else   
            @if($setting->key == "loaction") 
            <p> {{$setting->value}} </p>
            @endif 
          @endif 
          @endforeach
        </div>
        <div class="point">
          <div class="imgpoint">
            <img src="{{url('imges/Group 9.png')}}" alt="">
          </div>
          @foreach( $data['settings'] as $setting)
          @if($setting->key == "mobile")
          <p> {{$setting->value}} </p>
          @endif   
          @endforeach
     
      
      </div>
      </div>


    </div>

    <div class="leftfooter">
      <div class="ppfoter">
        <h5>{{__('dashboard.home')}}</h5>
        <p><a href="#">{{__('dashboard.programs')}}</a></p>
        <p><a href="#">{{__('setting.Most_notable_achievements')}}</a></p>
        <p><a href="#">{{__('dashboard.companies')}}</a></p>
      </div>
      <div class="ppfoter">
        <h5>{{__('setting.about_us')}}</h5>
        <p><a href="{{route('about_us.index')}}">{{__('setting.about_the_association')}} </a></p>
        <p><a href="{{route('about_us.index')}}">{{__('setting.vision')}}</a></p>
        <p><a href="{{route('about_us.index')}}">{{__('setting.message')}}</a></p>
        <p><a href="{{route('principles.index')}}">{{__('setting.value')}}</a></p>
        <p><a href="{{route('goales.index')}}">{{__('setting.Strategic_objectives')}}</a></p>
        <p><a href="#">{{__('setting.policies')}}</a></p>
        <p><a href="{{route('about_us.index')}}">{{__('setting.structure_of_the_association')}}</a></p>
      </div>
      <div class="ppfoter">
        <h5>{{__('setting.resources')}}</h5>
        <p><a href="{{route('publicationsAndReport.all')}}">{{__('dashboard.publications_and_Reports')}}</a></p>
        <p><a href="{{route('visualLibraries.all')}}">{{__('dashboard.visual_libraries')}}</a></p>
        <p><a href="{{route('news.all')}}">{{__('setting.News_and_advertisements')}}</a></p>
       </div>
      <div class="ppfoter">
        <h5>{{__('setting.join_us')}}</h5>
        <p><a href="{{route('volunteer.home')}}">{{__('setting.Volunteer_order')}}</a></p>
        <p><a href="{{route('employment.home')}}">{{__('setting.Employment_order')}}</a></p>
        <p><a href="{{route('company.home')}}">{{__('setting.Building_a_company')}}</a></p>
        <h5>{{__('dashboard.contact_us')}}</h5>
        <p><a href="{{route('contactUs.home')}}"> {{__('dashboard.contact_us')}}</a></p>
        <p><a href="{{route('about_us.index')}}"> {{__('dashboard.contact_information')}} </a></p>
      </div>

    </div>

  </div>
</div>
<div class="footerbotn">
  <div class="container ">
    <div class="footerall">
      <p> </p>
      <div class="alliconbt">
        <a href="#">
          <div class="icon_footericon">
            <div class="imgfooticon">
              <i class='bx bxl-twitter'></i>
            </div>
          </div>
        </a>
        <a href="#">
          <div class="icon_footericon">
            <div class="imgfooticon">
              <i class='bx bxl-facebook'></i>
            </div>
          </div>
        </a>
        <a href="#">
          <div class="icon_footericon">
            <div class="imgfooticon">
              <i class='bx bxl-instagram'></i>
            </div>
          </div>
        </a>
        <a href="#">
          <div class="icon_footericon">
            <div class="imgfooticon">
              <i class='bx bx-envelope'></i>
            </div>
          </div>
        </a>
        <a href="#">
          <div class="icon_footericon">
            <div class="imgfooticon">
              <i class='bx bx-lemon'></i>
            </div>
          </div>
        </a>
      </div>

    </div>
  </div>

</div>

</div>



</footer>

<a href="#" class="scrollup" id="scroll-up">
<i class='bx bxs-chevron-up-circle'></i>
</a>
