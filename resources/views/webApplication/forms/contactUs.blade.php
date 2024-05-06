@extends('webApplication.layouts.app')

@section('web_content')
 

    <div class="containerr">
        <section class="hedsid" >
             <h6><a href="index.html">{{__('dashboard.home')}} / </a></h6><h6>  {{__('dashboard.contact_us')}}   </h6>
        </section>
        <section class="aboutt">
            <h1>{{__('dashboard.contact_us')}} </h1>
          <form id="contactUsForm">
          @csrf
            <div class="body_cotact">
                <div class="right_contact">
                     <div class="input_name">
                        <input type="text" name="full_name" placeholder="{{__('columns.full_name')}}">
                        <input type="text" name="email" placeholder="{{__('columns.email')}}">
                     </div>
                     <textarea  id="message" name="message" cols="30" rows="10" placeholder="{{__('columns.message')}}"></textarea>
                     <div class="checkbox_text">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <p> {{__('dashboard.privacy_policy')}}</p>
                     </div>
                     <button class="btn_donate">{{__('button.send')}}</button>
                  </form>


                </div>
                <div class="left_contact">
                    <h1>{{__('dashboard.contact_us')}}</h1>
                    <div class="line_contant"></div>

                    <div class="icon_text_contact">
                        <div class="imgd">
                            <img src="{{url('imges/Group 7904.png')}}" alt="">
                        </div>
                        @foreach($setting as $settings) 
                          @if($settings->key == "mobile") 
                            <p> {{$settings->value}} </p>
                          @endif  
                         @endforeach                   
                   </div>
                    <div class="icon_text_contact">
                        <div class="imgd">
                            <img src="{{url('imges/Group 7903.png')}}" alt="">
                        </div>
                        @foreach($setting as $settings) 
                          @if($settings->key == "gmail") 
                            <p> {{$settings->value}} </p>
                          @endif  
                         @endforeach                       </div>
                    <div class="icon_text_contact">
                        <div class="imgd">
                            <img src="{{url('imges/Path 5860.png')}}" alt="">
                        </div>
                        @foreach($setting as $settings)
                        @if($CurrentLang == "ar")
                          @if($settings->key == "loaction_ar")
                          <p> {{$settings->value}} </p>
                          @endif 
                        @else   
                          @if($settings->key == "loaction") 
                          <p> {{$settings->value}} </p>
                          @endif 
                        @endif 
                        @endforeach
                    </div>
                    
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
                              <i class='bx bx-lemon'></i>
                            </div>
                          </div>
                        </a>
                      </div>
          
                </div>
            </div>


        </section>
    </div>
 



    <script type="text/javascript">
                           $('#contactUsForm').on('submit',function(e)
                                {   
                                    e.preventDefault();
                                    var checkbox = document.getElementById("flexCheckDefault");
                                   if (checkbox.checked) {

                                    let formData = new FormData($('#contactUsForm')[0]);
                                    $.ajaxSetup({
                                    headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                            }});
                                    $.ajax(
                                    {
                                    type:"POST",
                                    url: "contactUs/store",
                                    data:formData,
                                    contentType:false, // determint type object 
                                    processData: false,  // processing on response 
                                    success:function(response)
                                    {
                                    console.log(response);
                                    console.log("response");

                                     Swal.fire({
                                                    text: "You have successfully send message!",
                                                    icon: "success",
                                                    buttonsStyling: false,
                                                    confirmButtonText: "Ok, got it!",
                                                    customClass: 
                                                    {
                                                        confirmButton: "btn btn-primary",
                                                    }
                                        })
                                       

                                
                                    },
                                
                                    error: function(response) 
                                        {
                                            console.log(response)  ; 
                                                Swal.fire(
                                                    {
                                                            text:  response.responseJSON.message  , 
                                                            icon: "error",
                                                            buttonsStyling: false,
                                                            confirmButtonText: "Ok, got it!",
                                                                customClass: {
                                                                    confirmButton: "btn btn-primary",

                                                                    }
                                                        })
                                        },
                                    });







                                   }else
                                     {
                                        Swal.fire(
                                          {
                                              text:  "You must specify the value of the terms"  , 
                                              icon: "error",
                                              buttonsStyling: false,
                                              confirmButtonText: "Ok, got it!",
                                                  customClass: {
                                                      confirmButton: "btn btn-primary"
                                                      }
                                          })

                                    }


 
                        
                                
                                
                                });

   
                           </script>     


<!-- 
    <script src="{{url('js/bootstrap.min.js')}}"></script>
    <script src="{{url('js/main.js')}}"></script> -->
    @endsection