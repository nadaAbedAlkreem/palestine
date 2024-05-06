@extends('Dashboard.layout.app')

@section('content')
 

 

                                                      
      
     
    
<div class="post d-flex flex-column-fluid" id="kt_post">
                            <!--begin::Container-->
                            <div id="kt_content_container" class="container-xxl">
                                <!--begin::Form-->
                                <form id="setting_update_form"  enctype="multipart/form-data" class="form d-flex " data-kt-redirect="../../demo1/dist/apps/ecommerce/catalog/products.html">
                                    <!--begin::Aside column-->
                                    @csrf
                                
                                    <!--end::Aside column-->
                                    <!--begin::Main column-->
                                    <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                                        <!--begin:::Tabs-->
                                        <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-bold mb-n2">
                                            <!--begin:::Tab item-->
                                            <li class="nav-item">
                                                <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#kt_ecommerce_add_product_general">General</a>
                                            </li>
                                         
                                        </ul>
                                        <!--end:::Tabs-->
                                        <!--begin::Tab content-->
                                        <div class="tab-content">
                                            <!--begin::Tab pane-->
                                            <div class="tab-pane fade show active" id="kt_ecommerce_add_product_general" role="tab-panel">
                                                <div class="d-flex flex-column gap-7 gap-lg-10">
                                                    <!--begin::General options-->
                                                    <div class="card card-flush py-4">
                                                        <!--begin::Card header-->
                                                        <div class="card-header">
                                                            <div class="card-title">
                                                                <h2>setting</h2>
                                                            </div>
                                                        </div>
                                                        <!--end::Card header-->
                                                        <!--begin::Card body-->
                                                      

                                                        @if(!empty($setting))
                                                          
                                                           @foreach($setting as $item)
                                                           @if($CurrentLang ==$item->language || $item->language == null)
                                                            @if ($item->type_field =="textarea")
                                                               
                                                               <div class="card-body pt-0">
                                                                       <label class="form-label">{{$item->key}}</label>
                                                                       <textarea type="text"  id = "{{$item->key}}" name="{{$item->key}}" value = "  $item->value " class="form-control required" >{{$item->value}} </textarea>
                                                            </div>
                                              
                                                             @elseif($item->type_field == "input" ) 
                                                            <div class="card-body pt-0">
                                                                       <label class="form-label">{{$item->key}}</label>
                                                                       <input type="text"  id = "{{$item->key}}" name="{{$item->key}}" value = "{{$item->value}}" class="form-control required"  />
                                                            </div>
                                                                     
                                                            @endif         

  

                                                                     @endif
                                                           @endforeach

                                                        @endif
                                                    
                                                 
                                                             
                                                               
                                                            
                                                               
                                                                 
                                                             
                                                         </div>                      
                                         

							 
                                         

                                                        <!--end::Card header-->
                                                    
                                  
                                                 </div>
                                            </div>
                             
                                        </div>
                                        <!--end::Tab content-->
                                        <div class="d-flex justify-content-end">
                                            <!--begin::Button-->
                                            <a href="../../demo1/dist/apps/ecommerce/catalog/products.html" id="kt_ecommerce_add_product_cancel" class="btn btn-light me-5">Cancel</a>
                                            <!--end::Button-->
                                            <!--begin::Button-->
                                            <button type="submit" id="kt_ecommerce_add_product_submit" class="btn btn-primary">
                                                <span class="indicator-label">Save Changes</span>
                                                <span class="indicator-progress">Please wait...
                                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                            </button>
                                            <!--end::Button-->
                                        </div>
                                    </div>
                                    <!--end::Main column-->
                                </form>

                                
                                <!--end::Form-->
                            </div>
                            
                            <!--end::Container-->
                        </div>
                           
            
    
          
        <script type="text/javascript">


                        $('#setting_update_form').on('submit',function(e)
                                {   
                                     
                                    e.preventDefault();

                                    let formData = new FormData($('#setting_update_form')[0]);

                                   
                                  $.ajaxSetup({
                                    headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                            } });
                                    $.ajax(
                                    {
                                    type:"POST",
                                    url: "valuesPrinciples/update",
                                    data:formData,
                                    contentType:false, // determint type object 
                                    processData: false,  // processing on response 
                                    success:function(response)
                                    {
                                    console.log(response);
                                    console.log("response");

                                     Swal.fire({
                                                    text: "You have successfully  update data!",
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



        </script>

 
                                        
                           
                 
@endsection

 

 

												
                                     

