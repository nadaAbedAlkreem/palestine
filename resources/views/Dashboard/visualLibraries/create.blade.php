@extends('Dashboard.layout.app')

@section('content')
 

 
                                            
										<div class="d-flex justify-content-center">
                                                <div style="width: 60rem;" >
													<form id="SubmitFormVisaulLibrary"  enctype="multipart/form-data">
														@csrf
														<input type="hidden" id = "language" name="language" value="{{ App::getLocale() }}">

														<div class="card">
																<div class="card-body">

 																			<section>
																			 <label class="form-label">{{__('columns.image')}}</label>

																			 <div class="card-body pt-0">
 
																				<div class="image-input image-input-empty image-input-outline mb-3" data-kt-image-input="true" style="background-image: url( )">
																					<div class="image-input-wrapper w-100px h-100px"></div>    
																								<label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
																									<i class="bi bi-pencil-fill fs-7"></i>
																									<!--begin::Inputs-->
																									<input type="file" name="image"  />
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
 																				<label class="form-label">{{__('columns.title')}}</label>
																				<input type="text"  id = "title" name="title" class="form-control required" placeholder="{{__('columns.title')}}">
																				<input type="hidden"  id = "id" name="id" >
  																			
                                                                                <div class="control-group form-group"> 
                                                                                <label class="form-label">{{__('columns.description')}}</label>
                                                                                <textarea type="text"  id = "description" name="description"   class="form-control required" ></textarea>
                                                                              
                                                                                 </div> 
																				 @else 
																				 <label class="form-label">{{__('columns.title')}}</label>
																				<input type="text"  id = "title_ar" name="title_ar" class="form-control required" placeholder="{{__('columns.title')}}">
                                                                                <div class="control-group form-group">
                                                                                <label class="form-label">{{__('columns.description')}}</label>
                                                                                <textarea type="text"  id = "description_ar" name="description_ar"   class="form-control required"  ></textarea>
      
                                                                                </div> 
																				@endif
																		 
																				
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
	    <script src='assets/js/custom/actions/visual-libraries-actions.js'></script>
 
  

                                         
   
 
@endsection

 

 

												
                                     

