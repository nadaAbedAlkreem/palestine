@extends('Dashboard.layout.app')

@section('content')  
  

                                            <div class="d-flex justify-content-center">
                                                <div style="width: 60rem;" >
												<!-- id="SubmitFormNews" -->
													<form   id="SubmitFormProfile" enctype="multipart/form-data">
														@csrf
														<div class="card">
																<div class="card-body">
																	<div id="">
																			<section>
                                                                                @if(!empty($user))
																				<div class="control-group form-group">
																				<label class="form-label">email</label>
																				<input type="text"  id = "email" name="email" class="form-control required" value="{{$user->email}}">
																				</div>	
                                                                                <div class="control-group form-group">
																				<label class="form-label">full name</label>
																				<input type="text"  id = "full_name" name="full_name" class="form-control required" value="{{$user->full_name}}" >
																				</div>	
                                                                                <div class="control-group form-group">
																				<label class="form-label">current password </label>
																				<input type="password"  id = "current_password" name="current_password" class="form-control " placeholder="current_password">
																				</div>	
                                                                                <div class="control-group form-group">
																				<label class="form-label">update password</label>
																				<input type="password"  id = "new_password" name="new_password" class="form-control " placeholder="update password">
																				</div>
                                                                                @endif	
                                                                            </section>
																		</div>
																	</div>
                                                                    <button type="submit" id="kt_ecommerce_add_product_submit" class="btn btn-primary">
                                                                            <span class="indicator-label">Save Changes</span>
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
                                                    <script src='assets/js/custom/actions/profile-action.js'></script>

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
                                                @endsection
 