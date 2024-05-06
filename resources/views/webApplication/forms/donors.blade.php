@extends('webApplication.layouts.app')

@section('web_content')


<div class="containerr">
    <section class="hedsid" >
    <h6><a href="{{route('web.home')}}">{{__('dashboard.home')}} /  </a></h6><h6> {{__('setting.donate_now')}} </h6>
    </section>

    <section class="aboutt">
        <h1>  {{__('setting.donate_now')}} </h1>

        <form class="body_donate" id="formStoreDonores">
            <div class="right_donate">
              @csrf
                <h2>{{__('columns.Donor_details')}}</h2>
                <div class="blowline"></div>
            
                <div class="input_donate">
                    <input name="name"   type="text" placeholder="{{__('columns.full_name')}}">
                    <input  name="email" type="email" placeholder="{{__('columns.email')}}">
                </div>
                
                <div class="input_donate">
                  <div class="selectPhone" >
                    <input  name="mobile" class="inputPhoneI" type="tel" id="phone" placeholder="{{__('columns.mobile')}}">
                  </div>
                    <select name="project" class="form-select" aria-label="">
                    <option selected>{{__('columns.Choose_amount_donate')}}</option>

                    @if(!empty($programs))
                    @foreach($programs as $value)

                    <option value="{{$value->id}}">{{$value->title}} </option>
                    @endforeach
                    @endif
                    </select>
                </div>
                <div class="input_donate">
                    <select type="text" class="form-select" id="country" name="country" placeholder="{{__('columns.country')}}">
                      <option value="">{{__('columns.Select_city')}}</option>
                    </select>
                    <select name="city" id="state" class="form-select" >
                      <option value="">{{__('columns.Select_country')}}</option>
                    </select>
                </div>
                <div class="input_donate">
                    <textarea name="message" id="message" cols="30" rows="10" placeholder="{{__('columns.Your_message_us')}}"></textarea>
                </div>
                <div class="inputCheck">
                  <input name="announcing_donor" class="form-check-input" type="checkbox" value="" id="announcing_donor">
                  <label class="form-check-label" for="announcing_donor">
                   {{__('columns.innovator')}}
                  </label>
                </div>




            </div>


            <div class="leftdonateForm" >
              <div class="mt-4">

                <label style="font-weight: bold; font-size: 16px;" for=""> {{__('columns.Choose_amount_donate')}}</label>

                <div class="cardsDonate">
                  <div class="cardDonate active">
                    <i class='bx bx-check'></i>
                    <span  >$20</span>
                  </div>
                  <div class="cardDonate">
                    <i class='bx bx-check'></i>
                    <span>$50</span>
                  </div>
                  <div class="cardDonate"> 
                    <i class='bx bx-check'></i>
                    <span>$100</span>
                  </div>
                  <div class="cardDonate">
                    <i class='bx bx-check'></i>
                    <span>$500</span>
                  </div>
                  <div class="cardDonate">
                    <i class='bx bx-check'></i>
                    <span>$1000</span>
                  </div>
                  <div class="cardDonate">
                    <i class='bx bx-check'></i>
                    <span>$2000</span>
                  </div>

                </div>
                <div>
                  <div class="inputCheck anotherAmount">
                    <input class="form-check-input inputCheckA" type="checkbox" value="" name="defaultCheck2" id="defaultCheck2">
                    <label class="form-check-label " for="defaultCheck2">
                    {{__('columns.Add_another_amount')}}
                  </label>
                  </div>
                </div>
                <div class="input_donate">
                  <div class=" inputPriceI  input-group mb-3" style=" max-width:300px;">
                    <span class=" input-group-text textDI inputCA" >$</span>
                    <input  name="add_money" type="number" class="form-control inputCA" disabled aria-label="Amount (to the nearest dollar)">
                  </div>
                </div>

              </div>

              <div class="mt-4">

                <h5> {{__('columns.Donation_method')}}</h5>

                <div class="cardsDonate">
                 
              
                  <div class="cardDonateS">
                    <i class='bx bx-check' active></i>
                    <img src="{{url('images/stripe-purple-300x300.svg')}}" alt="">
                  </div>
                </div>

              </div>

              <button type="button" class="btnDonare"> {{__('setting.donate_now')}}</button>


              <div class="mt-4">

                <h5>{{__('columns.Trusted_by')}}</h5>

                <div class="imgGC">
                  <img src="{{url('images/masterCardS.svg')}}" alt="">
                  <img src="{{url('images/visaa.svg')}}" alt="">
                  <img src="{{url('images/3d-secure.svg')}}" alt="">
                  <img src="{{url('images/paypal.svg')}}" alt="">
                  
                  <div class="d-flex gap-2">
                    <img class="imgS" src="{{url('images/secureCheckOut.svg')}}" alt="">
                    <img class="imgS" src="{{url('images/privacyProtected.svg')}}" alt="">
                  </div>
                </div>
              </div>
            </div>

            
            

            
          </form>

          




    </section>

      
 
</div>


 


  <script src="{{url('js/jquery_library.js')}}"></script>
  

  <script  type= text/javascript>
    var input = document.querySelector("#phone");
    window.intlTelInput(input,{});

  output = document.querySelector("#output");

var iti = window.intlTelInput(input, {
  nationalMode: true,
  utilsScript: "../../build/js/utils.js?1678446285328" // just for formatting/placeholders etc
});

var handleChange = function() {
  var text = (iti.isValidNumber()) ? "International: " + iti.getNumber() : "Please enter a number below";
  var textNode = document.createTextNode(text);
  output.innerHTML = "";
  output.appendChild(textNode);
};

// listen to "keyup", but also "change" to update when the user selects a country
input.addEventListener('change', handleChange);
input.addEventListener('keyup', handleChange);

</script>

  <script  type= text/javascript>
        $(".cardDonate").click(function(){

        $(".cardDonate").removeClass("active");
        $(".inputCheckA").prop( "checked", false );
        $(".inputCA").prop( "disabled", true );
        $(".inputCA").val( "" )
        $(this).addClass("active");

});
      $(".anotherAmount").click(function(){
      $(".cardDonate").removeClass("active");
      if ($('.anotherAmount').attr('checked')){
        $(".inputCA").prop( "disabled", true );
      }else{
        $(".inputCA").prop( "disabled", false );
      }
      $(".inputCA").val( "" )
});

/////////////////////////////////////////

$(".cardDonateS").click(function(){

$(".cardDonateS").removeClass("active");
$(this).addClass("active");

});



  </script>
 
  <!-- <script src="{{url('js/bootstrap.min.js')}}"></script> -->
  <script src="{{url('js/countrySelect.js')}}"></script>
  <!-- <script src="{{url('js/main.js')}}"></script> -->
  <script src="{{url('build/js/intlTelInput.min.js')}}"></script>
  <script src="{{url('build/js/nationalMode.js')}}"></script>
  <script src="{{url('js/donors.js')}}"></script>
  @endsection



 