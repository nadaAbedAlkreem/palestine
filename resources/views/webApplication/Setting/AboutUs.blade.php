@extends('webApplication.layouts.app')

@section('web_content')
 
 <div class="containerr">
    <section class="hedsid" >
    <h6><a href="{{route('web.home')}}">{{__('dashboard.home')}} / </a></h6><h6>  {{__('setting.about_us')}} </h6>
    </section>
     <section class="aboutt">
    @if(!empty($aboutUs) ) 
     @foreach($aboutUs as $key )
     @if($key->groub == "association")
 
      @if($key->key  ==  "association_header_ar")
           <h1>  {{$key->value}} </h1>
          @elseif($key->key ==  'association_body_ar')

        <div class="card_about">
            <div class="text_card">
            <p>
            {{$key->value}} 
            </p>
             </div>
             @elseif($key->key == 'association_image_ar')

                <div class="img_card_about">
                    <img src="{{ url('/storage2/' . $key->value) }}"  alt="">
                </div>
 
            
        </div>
        
        @endif   
       @endif      
 


       @if($key->groub == "vision")
       
        @if($key->key == 'vision_header_ar')
        
        <div class="card_about card2">
            <div class="text_card">
            <h1>  {{$key->value}} </h1>
             @elseif($key->key =='vision_body_ar')

            <p>
            {{$key->value}} 
            </p>

             </div>
 
            @elseif($key->key =='vision_image_ar')

            <div class="img_card_about2">
                <img src="{{ url('/storage2/' . $key->value) }}" alt="">
            </div>
 
        </div>
 
        @endif     
        @endif   
  
 




      @if($key->groub == "message")

      @if($key->key == 'message_header_ar' )
  

        <div class="card_about card3">
            <div class="text_card">
            <h1>  {{$key->value}} </h1>
             @elseif($key->key == 'message_body_ar')
 
            <p>
            {{$key->value}} 
            </p>

             </div>

             @elseif($key->key  ==  'message_image_ar')

            <div class="img_card_about3">
                <img src="{{ url('/storage2/' . $key->value) }}" alt="">
            </div>
         </div>
    


        @endif      
       @endif   
      @endforeach  
      @endif
  

      
      
 
   
    </section>

</div>


<script src="{{url('js/jquery library.js')}}"></script>
    <!-- <script src="{{url('js/bootstrap.min.js')}}"></script>
    <script src="{{url('js/main.js')}}"></script> -->
  

@endsection
