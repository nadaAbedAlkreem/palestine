@extends('Dashboard.layout.app')

@section('content')

	 <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
	<!--begin::Body-->
	<body id="kt_body">
  
 		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="page d-flex flex-row flex-column-fluid">
				<!--begin::Aside-->
			 
				<!--end::Aside-->
				<!--begin::Wrapper-->
				<div class="d-flex flex-column flex-row-fluid" id="kt_wrapper">
					<!--begin::Header-->
				 
					<!--end::Header-->
					
					<!--begin::Content-->
					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Container-->
						<div class="container-fluid" id="kt_content_container">
							<!--begin::Products-->
							<div class="card card-flush">
								<!--begin::Card header-->
								<div class="card-header align-items-center py-5 gap-2 gap-md-5">
									<!--begin::Card title-->
									<div class="card-title">
										<!--begin::Search-->
										<div class="d-flex align-items-center position-relative my-1">
											<!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
											<span class="svg-icon svg-icon-1 position-absolute ms-4">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black" />
													<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black" />
												</svg>
											</span>
											<!--end::Svg Icon-->
											<input type="text" data-kt-ecommerce-product-filter="search" class="form-control form-control-solid w-250px ps-14" placeholder="Search category" />
										</div>
										<!--end::Search-->
									</div>
									<!--end::Card title-->
									<!--begin::Card toolbar-->
									 
									<!--end::Card toolbar-->
								</div>
								<!--end::Card header-->
								<!--begin::Card body-->
								
								<div class="card-body pt-0">
									<!--begin::Table-->
									<table class="table  align-middle table-row-dashed fs-6 gy-5 data-table-companies" id="kt_ecommerce_products_table">
										<!--begin::Table head-->
										<thead>
											<!--begin::Table row-->
											<tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
											 <th class="min-w-100px">{{__('columns.organization_name')}}    </th>
 											 <th class="min-w-100px">{{__('columns.organization_type')}}</th>
 											 <th class="min-w-100px">{{__('columns.main_branch_address')}}</th>
 											 <th class="min-w-100px">{{__('columns.social_media_sites')}}</th>
											 <th class="min-w-100px">{{__('columns.annual_budget')}}</th>
											 <th class="min-w-100px">{{__('columns.number_of_centers')}}</th>
											 <th class="min-w-100px">{{__('columns.number_of_employees')}}    </th>
											 <th class="min-w-100px">{{__('columns.center_locations')}}       </th>
 											 <th class="min-w-100px">{{__('columns.registration_number_ministry_interior')}}</th>
											 <th class="min-w-100px">{{__('columns.Number_current_projects')}}</th>
											 <th class="min-w-100px">{{__('columns.main_donors_projects')}}             </th>
											 <th class="min-w-100px">{{__('columns.number_employees_organization')}}      </th>
											 <th class="min-w-100px">{{__('columns.nationalities_of_beneficiaries')}}     </th>
 											 <th class="min-w-100px">{{__('columns.age_group_beneficiaries')}}          </th>
											 <th class="min-w-100px">{{__('columns.strategic_goals')}}                           </th>
											 <th class="min-w-100px">{{__('columns.registration_certificate_ministry_interior')}}</th>
											 <th class="min-w-100px">{{__('columns.company_organizational_structure')}}</th>
 	
											</tr>
											<!--end::Table row-->
										</thead>
							 
										<tbody class="fw-bold text-gray-600">
                                      
										</tbody>
										<!--end::Table body-->
									</table>
									<!--end::Table-->
 
                                    </div>

                                    <div class="modal fade" id="modal-news-add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                           <div class="modal-content">
                                                <div class="modal-body">
													<form id="SubmitFormNews"  enctype="multipart/form-data">
														@csrf
														<div class="card">
																<div class="card-body">
																	<div id="">
																			<section>
																			<span class=" text-danger" role="alert" >
																					<i class="fas fa-exclamation-circle mr-1" id ="errors"  hidden></i>
																					</span>
																			<div class="row">
																			<div class="col">
																				<label class="form-label">title</label>
																				<input type="text"  id = "title" name="title" class="form-control required" placeholder="title">
																				<input type="hidden"  id = "id" name="id" >
																				</div>
																				<div class="col">
																				<label class="form-label">title_ar</label>
																				<input type="text"  id = "title_ar" name="title_ar" class="form-control required" placeholder="title_ar">
																				</div>
																			</div>	
																			<div class="row">
																			<div class="col">	
																				<div class="control-group form-group">
																				<label class="form-label">location</label>
																				<input type="text"  id = "location" name="location" class="form-control required" placeholder="location">
																				</div>	
																			</div>	
																			<div class="col">	
																				<div class="control-group form-group">
																				<label class="form-label">location_ar</label>
																				<input type="text"  id = "location_ar" name="location_ar" class="form-control required" placeholder="location_ar">
																				</div>	
																			</div>	
																			</div>	
																				<div class="control-group form-group">
																					<label class="form-label">date and time </label>
																					<input  type="datetime-local" id = "dateAndTime" name="dateAndTime" class="form-control required" placeholder="dateAndTime">
																				</div>
																				
																			<div class="card card-flush py-4">
																				<!--begin::Card header-->
																				<div class="card-header">
																					<div class="card-title">
																						<h2>Media</h2>
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
																									<h3 class="fs-5 fw-bolder text-gray-900 mb-1">Drop files here or click to upload.</h3>
																									<span class="fs-7 fw-bold text-gray-400">Upload up to 10 files</span>
																								</div>
																								<!--end::Info-->
																							</div>
																						</div>
																						<!--end::Dropzone-->
																					</div>
																					<!--end::Input group-->
																					<!--begin::Description-->
																					<div class="text-muted fs-7">Set the product media gallery.</div>
																					<!--end::Description-->
																				</div>
																				<!--end::Card header-->
																			</div>
																			<!--end::Media-->
																		
																			<table style="width:100%">
																				<tr>
																					<td id = "row_image">  
																				<!-- <div class="card-body" >
																				<div class="card-body text-center pt-0"  id = ""> -->
																					<!--begin::Image input-->
																					<!-- <div class="image-input image-input-empty image-input-outline mb-3" data-kt-image-input="true" style="">
																						<div   id = "selected_images" class="image-input-wrapper w-100px h-100px" style="background-image: url(/storage/uploads/images/)"></div>
																						<label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
																							<i id="delete" data-id="" class="bi bi-x fs-2"> </i> 
																						</label>  
																					</div>
																				</div>
																				</div>  
																			</div> -->
 
																		</td>
																				</tr>
																			</table>

																			

																		
																				<button type="button" id = "close" class="btn-close" data-bs-dismiss="modal" aria-label="Close" hidden ></button>
																		</section>
																		</div>
																	</div>
															</div>
														</div>
														<div class="modal-footer d-flex justify-content-center">
														<button type="submit" class="btn btn-indigo" id="submitForm">Send <i class="fas fa-paper-plane-o ml-1"></i></button>
														</div>
													</form>
                                                </div>
                                            </div>	
                                        </div>
                                     </div>
                                        </div>
	
	</body>
	

		<script>var hostUrl = "assets/";</script>
		<!--begin::Global Javascript Bundle(used by all pages)-->
		<script src="{{url('assets/plugins/global/plugins.bundle.js')}}"></script>
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
     
     		<!-- in this page  -->
 		<script src="{{url('assets/js/custom/actions/companies-actions.js')}}"></script>

 
  
 
 @endsection