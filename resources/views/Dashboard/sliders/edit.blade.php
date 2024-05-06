@extends('Dashboard.layout.app')

@section('content')
   

									
 @if(!empty($slider))   
<div class="post d-flex flex-column-fluid" id="kt_post">
                            <!--begin::Container-->
                            <div id="kt_content_container" class="container-xxl">
											 		<form id="SubmitFormUpdateSlider"  class="form d-flex flex-column flex-lg-row" data-kt-redirect="../../demo1/dist/apps/ecommerce/catalog/products.html"  enctype="multipart/form-data">
 											           @csrf	
														<input type="hidden" id = "language" name="language" value="{{ App::getLocale() }}">	 	
														<input type="hidden" id="id"  value = "{{$slider->id}}" name="id">
													   <div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10">

														<div class="card card-flush py-4">
														<!--begin::Card header-->
														<div class="card-header">
																	 
																	<div class="card-body" >
																	<div class="card-body pt-0">
															    	<!--begin::Select2-->
																  <div class="control-group form-group">
																	<label class="form-label">{{__('columns.redirect_to')}}</label>

																	<select class="form-select mb-2"   name="rediract_to" id="rediract_to">
																	<option ></option>
                                                                       @if($slider->rediract_to == "contact_us")
																		<option value="contact_us" selected>contact us</option>
																		@else 
																		<option value="contact_us" >contact us</option>
																		@endif
																	    @if($slider->rediract_to == "show_description") 
																		<option value="show_description" selected>show description</option>
                                                                        @else 
 																		@endif
 
																	</select>
                                                                   </div>
																   <div class="control-group form-group"  id="newsInputContainer">
																		<label>news </label>
																		<select class="itemNews form-control"    id='itemNews'  style="width: 200px"  name="news_id"></select>
 
																	</div>
																   <div class="control-group form-group">
																			<label class="form-label">{{__('columns.text_button')}}</label>
																			<input type="text"  id = "text_button" name="text_button" value="{{$slider->text_button}}"  class="form-control required"  />
																</div>  
																   
																   <div class="control-group form-group">
																	<div class="form-check form-switch" style="margin-top: 10px">
																		<label class="form-check-label" for="flexSwitchCheckDefault">active</label>
																		<input class="form-check-input" type="checkbox" role="switch" value="{{$slider->active}}"  name ="active" id="active">
																	</div>
																   </div>


															 </div>

																	
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
														
														<div class="card">
																<div class="card-body">

 																			<section>
																			 <label class="form-label">{{__('columns.image')}}</label>

																			 <div class="card-body pt-0">
 
                                                                            <div class="image-input image-input-empty image-input-outline mb-3" data-kt-image-input="true" style="background-image: url(/storage2/{{$slider->image}})">
                                                                              <div class="image-input-wrapper w-100px h-100px"></div>    
                                                                               <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                                                                <i class="bi bi-pencil-fill fs-7"></i>
                                                                                <!--begin::Inputs-->
                                                                                <input type="file"  name="image" id = "image"  />
                                                                                <input type="hidden" name="avatar_remove" />
                                                                                <!--end::Inputs-->
                                                                            </label>
                                                                            <!--end::Label-->
                                                                            <!--begin::Cancel-->
                                                                            <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                                                                                <i class="bi bi-x fs-2"></i>
                                                                            </span>
                                                                            <!--end::Cancel-->
                                                                            <!--begin::Remove-->
                                                                            <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                                                                                <i class="bi bi-x fs-2"></i>
                                                                            </span>
                                                                            <!--end::Remove-->
                                                             </div>	
                                                           </div>
														                    
														                     @if($CurrentLang == "en")
																			<div class="control-group form-group">
																			<label class="form-label">{{__('columns.title')}}</label>
																			<input type="text"  id = "title" name="title" value ="{{$slider->title}}" class="form-control required" placeholder="title">
																			</div> 
																			<div class="control-group form-group">
																			<label class="form-label">{{__('columns.description')}}</label>
																			<textarea  type="text"  id = "description" name="description"    class="form-control required" >{{  $slider->description }}</textarea>
																			</div> 
																			@else
																			
																			<div class="control-group form-group">
																			<label class="form-label">{{__('columns.title')}}</label>
																			<input type="text"  id = "title_ar" name="title_ar" value = "{{$slider->title_ar}}" class="form-control required" placeholder="title_ar">
																			</div> 
														
																			<div class="control-group form-group">
																			<label class="form-label">{{__('columns.description')}}</label>
																			<textarea    id = "description_ar" name="description_ar"   class="form-control required" >{{  $slider->description_ar }}</textarea>
																			</div> 
																			@endif
						 
																		  
																			<div class="control-group form-group">
																			<label class="form-label">{{__('columns.publication_start')}}</label>
																			<input type="datetime-local" value="{{$slider->publication_start}}" id = "publication_start" name="publication_start"   class="form-control required"  />
																			</div> 
																			<div class="control-group form-group">
																			<label class="form-label">{{__('columns.publication_end')}}</label>
																			<input  type="datetime-local"  value="{{$slider->publication_end}}" id = "publication_end" name="publication_end"   class="form-control required"  />

																			</div> 
																			
 																		</section>
																		</div>
																	</div>
                                                                    <button type="submit" id="kt_ecommerce_add_product_submit" class="btn btn-primary">
                                                                            <span class="indicator-label">{{__('button.Update')}}</span>
                                                                            <span class="indicator-progress">Please wait...
                                                                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                                   </button>
															</div>
                                            
														</div>
                                                    
													</form>
                                                </div>

                                                <div>

@endif
  
                                                
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
 
     		<!-- in this page  -->

		<script  type= text/javascript>
		 	hideInputNews();
		 	searchNewsData();
		 	updateSliderAction();
			function hideInputNews()
			 {
 				$('#rediract_to').on('change', function() 
					{
						// Get the selected value
							var selectedValue = $(this).val();

							// Check if the selected value is 'show_description'
							if (selectedValue === 'show_description') {
								// Show the input for 'news'
								$('#newsInputContainer').show();
							} else {
								// Hide the input for 'news'
								$('#newsInputContainer').hide();
							}
					});
			 }
			 function searchNewsData()
			 {
				$('.itemNews').select2(
				{
					placeholder: 'Select an item',
					ajax: {
						url: '/select2-autocomplete-ajax-news',
						dataType: 'json',
						delay: 250,
						processResults: function (data) {
						return {
							results:  $.map(data, function (item) {
								return {
									text: (item.language === "en")? item.title :  item.title_ar ,
									id: item.id
								}
 							})
						};
						},
						// cache: true
					}
				});
			 }
			 function updateSliderAction()
			 {
				$('#SubmitFormUpdateSlider').on('submit',function(e)
				{      
						e.preventDefault();
				

						let formData = new FormData($('#SubmitFormUpdateSlider')[0]);
				 
						
				
						$.ajaxSetup({
						headers: {
						'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
								}});
						$.ajax(
						{
								type:"POST",
								url: "slider/update",
								data:formData,
								contentType:false, // determint type object 
								processData: false,  // processing on response 
								success:function(response)
								{
								$('#successMsg').show();
								console.log(response);
								Swal.fire({
									text: "You have successfully reset your password!",
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


				}); 
			 }


  

		</script>
                                         
   
 
@endsection

 

 

												
                                     

