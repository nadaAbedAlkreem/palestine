@extends('Dashboard.layout.app')

@section('content')
 

   

                                              <div class="d-flex justify-content-center">
                                                <div style="width: 60rem;" >
												<!-- id="SubmitFormNews" -->
													<form   id="SubmitFormNews" enctype="multipart/form-data">
														@csrf
														<div class="card">
																<div class="card-body">
																	<div id="">
																			<section>
																			<span class=" text-danger" role="alert" >
																					<i class="fas fa-exclamation-circle mr-1" id ="errors"  hidden></i>
																					</span>
																					<input type="hidden" id = "language" name="language" value="{{ App::getLocale() }}">

																					<input type="hidden"  id = "id" name="id" >

																				@if($CurrentLang == "en")
 																				<label class="form-label">{{__('columns.title')}}</label>
																				<input type="text"  id = "title" name="title" class="form-control required" placeholder="title">
																				<div class="control-group form-group">
                                                                                 <label class="form-label">{{__('columns.description')}}</label>
                                                                                <textarea type="text"  id = "description" name="description"   class="form-control required" placeholder="description"></textarea>
                                                                                        
                                                                                 </div> 
																				
																				 <div class="control-group form-group">
																				<label class="form-label">{{__('columns.location')}}</label>
																				<input type="text"  id = "location" name="location" class="form-control required" placeholder="location">
																				</div>	
																				@else
																				<label class="form-label">{{__('columns.title')}}</label>
																				<input type="text"  id = "title_ar" name="title_ar" class="form-control required" placeholder="{{__('columns.title')}}">
                                                                            
                                                                                <div class="control-group form-group">

                                                                                <label class="form-label">{{__('columns.description')}}</label>
                                                                                <textarea type="text"  id = "description_ar" name="description_ar"   class="form-control required" placeholder="{{__('columns.description')}}"></textarea>
      
                                                                                </div> 
																			 
 																				<div class="control-group form-group">
																				<label class="form-label">{{__('columns.location')}}</label>
																				<input type="text"  id = "location_ar" name="location_ar" class="form-control required" placeholder="{{__('columns.location')}}">
																				</div>	
																				@endif
																		 
																				<div class="control-group form-group">
																					<label class="form-label">{{__('columns.dateAndTime')}}</label>
																					<input  type="datetime-local" id = "dateAndTime" name="date" class="form-control required" placeholder="{{__('columns.dateAndTime')}}">
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
																					<div class="text-muted fs-7">  {{__('columns.media')}}</div>
																					<!--end::Description-->
																				</div>
																				<!--end::Card header-->
																			</div>
																			<!--end::Media-->
																		
																			 

																			

																		
 																		</section>
																		</div>
																	</div>
                                                                    <button type="submit" id="kt_ecommerce_add_product_submit" class="btn btn-primary">
                                                                            <span class="indicator-label">{{__('button.Save')}}</span>
                                                                            <span class="indicator-progress">Please wait...
                                                                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                                   </button>
															</div>
                                            
														</div>
                                                    
													</form>
                                                </div>

                                                <div>

                                                
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
			<script type="text/javascript" > 
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

			</script>
	    <script src='assets/js/custom/actions/news-actions.js'></script>
 
  
 
                                         
   
 
@endsection
 

												
                                     

