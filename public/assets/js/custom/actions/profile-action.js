 
$(document).ready(function($)
{             

 
    $('#SubmitFormProfile').on('submit',function(e)
    {   
         
         e.preventDefault();

         let formData = new FormData($('#SubmitFormProfile')[0]);

           
         $.ajaxSetup({
         headers: {
         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                 } });
         $.ajax(
         {
         type:"post",
         url: "profile/update",
         data: formData,
         contentType:false, // determint type object 
         processData: false,  // processing on response 
         success:function(response)
         {
         console.log(response);
         console.log("response");

         Swal.fire({
                         text: "You have successfully reset your data!",
                         icon: "success",
                         buttonsStyling: false,
                         confirmButtonText: "Ok, got it!",
                         customClass: 
                         {
                             confirmButton: "btn btn-primary"
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
                                         confirmButton: "btn btn-primary"

                                         }
                             })
             },
         });


     });

  
      


});





 