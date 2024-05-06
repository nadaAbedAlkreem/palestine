var next_click=document.querySelectorAll(".next_button");
var main_form=document.querySelectorAll(".main");
var step_list = document.querySelectorAll(".progress-bar li");
var num = document.querySelector(".step-number");
let formnumber=0;

next_click.forEach(function(next_click_form){
    next_click_form.addEventListener('click',function(){
     validateform();
    
    });
}); 


var back_click=document.querySelectorAll(".back_button");
back_click.forEach(function(back_click_form){
    back_click_form.addEventListener('click',function(){
       formnumber--;
       updateform();
       progress_backward();
       contentchange();
    });
});

var username=document.querySelector("#user_name");
var shownname=document.querySelector(".shown_name");
 

var submit_click=document.querySelectorAll(".submit_button");
submit_click.forEach(function(submit_click_form){
    submit_click_form.addEventListener('click',function(){
    //    shownname.innerHTML= username.value;
    console.log('jhgfcdfghnjm,')
       formnumber++;
       updateform(); 
    });
});

// var heart=document.querySelector(".fa-heart");
// heart.addEventListener('click',function(){
//    heart.classList.toggle('heart');
// });


// var share=document.querySelector(".fa-share-alt");
// share.addEventListener('click',function(){
//    share.classList.toggle('share');
// });

 

function updateform(){
    main_form.forEach(function(mainform_number){
        mainform_number.classList.remove('active');
    })
    main_form[formnumber].classList.add('active');
} 
 
function progress_forward(){
    // step_list.forEach(list => {
        
    //     list.classList.remove('active');
         
    // }); 
    
     
    num.innerHTML = formnumber+1;
    step_list[formnumber].classList.add('active');
}  

function progress_backward(){
    var form_num = formnumber+1;
    step_list[form_num].classList.remove('active');
    num.innerHTML = form_num;
} 
 
var step_num_content=document.querySelectorAll(".step-number-content");

 function contentchange()
 {
     step_num_content.forEach(function(content){
        content.classList.remove('active'); 
        content.classList.add('d-none');
     }); 
     step_num_content[formnumber].classList.add('active');
 } 
 
 
function validateform()
{
 
      let formData = new FormData($('#SubmitFormVolunteer')[0]);
      formData.append('number_page',formnumber);
    $.ajaxSetup({
    headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }});
    $.ajax(
    {
            type:"POST",
            url: "volunteer/store",
            data:formData,
            contentType:false, // determint type object 
            processData: false,  // processing on response 
            success:function(response)
            {     

                     console.log(formnumber);
 
                    formnumber++ ; 
                    console.log(formnumber);
                    updateform(); 
                    progress_forward();
                    contentchange();
                
                            
            },
            error: function(response) 
            {       
                 console.log(response);
                console.log("response");
                Swal.fire(
                    {
                            text:  response.responseJSON.message  , 
                            icon: "error",
                            buttonsStyling: false,
                            confirmButtonText: "Ok, got it!",
                                customClass: {
                                    confirmButton: "btn btn-primary"

                                    }
                   })
                 
            },
     
    });
   
 }