@extends('Dashboard.layout.app')

@section('content')
 

 

@if(!empty($news))
                                                     
      
     
    
<div class="post d-flex flex-column-fluid" id="kt_post">
                            <!--begin::Container-->
                            <div id="kt_content_container" class="container-xxl">
                                <!--begin::Form-->
                                <form id="SubmitFormNewsEdit"  enctype="multipart/form-data" class="form d-flex flex-column flex-lg-row" data-kt-redirect="../../demo1/dist/apps/ecommerce/catalog/products.html">
                                    <!--begin::Aside column-->
                                    @csrf
                                    <div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10">
                                      
                                        <div class="card card-flush py-4">
    
                                                <div class="card-header">                             
                                                            <div class="card-body" >    
                                                                
                                                            <table class="table  align-middle table-row-dashed fs-6 gy-5 data-table-news-images" id="kt_ecommerce_products_table">
                                                                                        <!--begin::Table head-->
                                                                                        <thead>
                                                                                            <!--begin::Table row-->
                                                                                            <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                                                                        
                                                                                                <th class="min-w-100px">images</th>
                                                
                                                                                            </tr>
                                                                                            <!--end::Table row-->
                                                                                        </thead>
                                                                            
                                                                                        <tbody class="fw-bold text-gray-600">
                                                                                    
                                                                                        </tbody>
                                                                                        <!--end::Table body-->
                                                             </table>
                                                         
                                                         
                                                         
                                                         
                                                         
                                                                            </div>  

                                            </div>
                                         </div>
                                     
                         
                                        <!--end::Template settings-->
                                    </div>

                                 
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
                                                                <h2>General</h2>
                                                            </div>
                                                        </div>
                                                        <!--end::Card header-->
                                                        <!--begin::Card body-->
                                                    
                                                        <div class="card-body pt-0">
                                                            <!--begin::Input group-->
                                                            <input type="hidden" id = "language" name="language" value="{{ App::getLocale() }}">
                                                            <input type="hidden" name="id" class="form-control mb-2" placeholder="id" value="{{$news->id}}" />

                                                            @if($CurrentLang == "en")

                                                           	<label class="form-label">{{__('columns.title')}}</label> 
																				<input type="text"  id = "title" name="title"   value="{{$news->title}}" class="form-control required" placeholder="title">
																				<div class="control-group form-group">
                                                                                 <label class="form-label">{{__('columns.description')}}</label>
                                                                                <textarea type="text"  id = "description" name="description"   value="{{$news->description}}"  class="form-control required" placeholder="description">{{$news->description}}</textarea>
                                                                                        
                                                                                 </div> 
																				
																				 <div class="control-group form-group">
																				<label class="form-label">{{__('columns.location')}}</label>
																				<input type="text"  id = "location" name="location"   value="{{$news->location}}" class="form-control required" placeholder="location">
																				</div>
                                                            @else
                                                        
                                                             <div class="card-body pt-0">
                                                             <label class="form-label">{{__('columns.title')}}</label>
																				<input type="text"  id = "title_ar" name="title_ar"   value="{{$news->title_ar}}" class="form-control required" placeholder="{{__('columns.title')}}">
                                                                            
                                                                                <div class="control-group form-group">

                                                                                <label class="form-label">{{__('columns.description')}}</label>
                                                                                <textarea type="text"  id = "description_ar" name="description_ar"    value="{{$news->description_ar}}" class="form-control required" placeholder="{{__('columns.description')}}">{{$news->description_ar}}</textarea>
      
                                                                                </div> 
																			 
 																				<div class="control-group form-group">
																				<label class="form-label">{{__('columns.location')}}</label>
																				<input type="text"  id = "location_ar" name="location_ar" class="form-control required"  value="{{$news->location_ar}}" placeholder="{{__('columns.location')}}">
																				</div>	
                                                                  @endif                                             
     
                                                             
                                                                 	<div class="control-group form-group">
																	<label class="form-label">{{__('columns.dateAndTime')}} </label>
																	<input  type="datetime-local"   value="{{$news->date}}" id = "date" name="date" class="form-control required" placeholder="{{__('columns.dateAndTime')}}">
                                                                    </div>

                                                           
                                                            

                                            
                                                             
                                                            </div>                      
                                         
 
                                                             
                                                               
                                                            
                                                               
                                                                 
                                                             
                                                         </div>                      
                                         

                                                         <div class="card card-flush py-4">
																				<!--begin::Card header-->
																				<div class="card-header">
																					<div class="card-title">
																						<h2>{{__('columns.media')}}</h2>
																					</div>
																				</div>
																				<!--end::Card header-->
																				<!--begin::Card body-->
																				<div class="card-body pt-0">
																					<!--begin::Input group-->
																					<div class="fv-row mb-1">
																						<!--begin::Dropzone-->
																						<div class="dropzone"  id="images">
																							<!--begin::Message-->
																							<div class="dz-message needsclick">
																								<!--begin::Icon-->
																								<i class="bi bi-file-earmark-arrow-up text-primary fs-3x"></i>
																								<!--end::Icon-->
																								<!--begin::Info-->
																								<div class="ms-4">
																									<h3 class="fs-5 fw-bolder text-gray-900 mb-1">{{__('columns.drop')}}</h3>
																									<span class="fs-7 fw-bold text-gray-400">{{__('columns.upload')}}</span>
																								</div>
																								<!--end::Info-->
																							</div>
																						</div>
																						<!--end::Dropzone-->
																					</div>
																					<!--end::Input group-->
																					<!--begin::Description-->
																					<div class="text-muted fs-7">{{__('columns.media')}}</div>
																					<!--end::Description-->
																				</div>
																				<!--end::Card header-->
																			</div>
																			<!--end::Media-->
																		
																			 
                                                <!--end::Media-->
                                                <!--begin::Pricing-->
                                                <div class="card card-flush py-4">
                                                    <!--begin::Card header-->
                                                 
                                                    <!--end::Card header-->
                                                    <!--begin::Card body-->
                                                    <div class="card-body pt-0">
                                                         
                                                        <div class="d-none mb-10 fv-row" id="kt_ecommerce_add_product_discount_percentage">
                                                            <!--begin::Label-->
                                                            <label class="form-label">Set Discount Percentage</label>
                                                            <!--end::Label-->
                                                            <!--begin::Slider-->
                                                            <div class="d-flex flex-column text-center mb-5">
                                                                <div class="d-flex align-items-start justify-content-center mb-7">
                                                                    <span class="fw-bolder fs-3x" id="kt_ecommerce_add_product_discount_label">0</span>
                                                                    <span class="fw-bolder fs-4 mt-1 ms-2">%</span>
                                                                </div>
                                                                <div id="kt_ecommerce_add_product_discount_slider" class="noUi-sm"></div>
                                                            </div>
                                                         
                                                        </div>
                                                         
                                                    </div>
                                                    <!--end::Card header-->
                                                </div>
                                         

                                                        <!--end::Card header-->
                                                    
                                  
                                             @endif
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
                                                <span class="indicator-label">{{__('button.Save')}}</span>
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
                                </div>
                            
                            <!--end::Container-->
                        </div>
                           
            
    @push('scripts')
        <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
        <script>
            flatpickr("input[type=datetime-local]");
        </script>
    @endpush
    <script>var hostUrl = "assets/";</script>
		<!--begin::Global Javascript Bundle(used by all pages)-->
		<script src="{{url('assets/plugins/global/plugins.bundle.js')}}"></script>
		<!-- <script src="{{url('assets/js/scripts.bundle.js')}}"></script> -->
		<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
 
		<!--end::Global Javascript Bundle-->
		<!--begin::Page Vendors Javascript(used by this page)-->
		<script src="{{url('assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
		<!--end::Page Vendors Javascript-->
		<!--begin::Page Custom Javascript(used by this page)-->
 		<script src="{{url('assets/js/widgets.bundle.js')}}"></script>
		<script src="{{url('assets/js/custom/widgets.js')}}"></script>
		<script src="{{url('assets/js/custom/apps/chat/chat.js')}}"></script>
		<script src="{{url('assets/js/custom/utilities/modals/users-search.js')}}"></script>
        @push('scripts')
		<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
		<script>
            flatpickr("input[type=datetime-local]", {
                enableTime: true, // Enable time selection
                dateFormat: "Y-m-d h:i K", // Format with AM/PM indicator
            });		
       </script>
    	@endpush
     		<!-- in this page  -->
	    <script src='assets/js/custom/actions/news-actions.js'></script>
        <script type="text/javascript">  
 			let myDropzone = new Dropzone("#images", {
			autoProcessQueue: false,
			url: "/]https://keenthemes.com/scripts/void.php",
			paramName: "file",
			maxFiles: 5,
			maxFilesize: 5,
			acceptedFiles: ".jpeg, .jpg, .png",
			addRemoveLinks: true,
			accept: function(e, t) 
			   {
				"wow.jpg" == e.name ? t("Naha, you don't.") : t();
			   }
	     	});
		
			function Images() {
				return myDropzone.getAcceptedFiles();
			}

		  
         $(document).ready(function($)
          {
            // Get the current URL
            var currentUrl = window.location.href;
            // Output the current URL
            console.log(currentUrl);
            var parts = currentUrl.split('/');
            // Get the last part of the URL which contains the number
            var lastPart = parts[parts.length - 2];

            // Convert the last part to a number
            var number = parseInt(lastPart);
  

            
            var table = $('.data-table-news-images').DataTable(
            {
                processing: true,
                serverSide: true,
                ordering: false,
                searching: false,
                info: false,
                paging: false,

                ajax:
                {
                         url: "NewsImages/"+number,

                                data: function (d) {
                                    // d.category = $('#category').val()
                                }
                },
                columns: [
                     {data: 'images', name: 'images'}, 
                        
                  ]     


            });
  
           $(".data-table-news-images").on('click', '.deleteRecord[data-id]', function (e)
            { 
                        e.preventDefault();
                    $('.show_confirm').click(function(event)
                        {
                    
                            Swal.fire({
                                title: 'Are you sure?',
                                text: "You won't be able to revert this!",
                                icon: 'warning',
                                showCancelButton: true,
                                confirmButtonColor: '#3085d6',
                                cancelButtonColor: '#d33',
                                confirmButtonText: 'Yes, delete it!'
                            })
                            .then((willDelete) => 
                            { 
                                if (willDelete.isConfirmed)
                                {
                                    var id = $(this).data("id");
                                    var token = $("meta[name='csrf-token']").attr("content");
                            
                                    $.ajax(
                                    {
                                    url: "NewsImagesDelete/"+id,
                                    type: 'DELETE',
                                    data: 
                                    {
                                        "id": id,
                                        "_token": token,
                                    },
                                    success: function ()
                                    {
                                        console.log("it Works");
                                        $('.data-table-news-images').DataTable().ajax.reload();
                                    }
                                    });

                                }
                            });

                        
                        });

                
             });

 
            });





        </script>
          
    
@endsection

 

 

												
                                     

