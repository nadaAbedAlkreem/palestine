<div class="drawer">

<div id="kt_aside" class="aside aside-dark aside-hoverable" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_mobile_toggle">
					<!--begin::Brand-->
					<div class="aside-logo flex-column-auto" id="kt_aside_logo">
						<!--begin::Logo-->
						<a href="{{route('home')}}">
							<img alt="Logo" src="assets/media/logos/Group-8541.png" class="h-25px logo" />
						</a>
						<!--end::Logo-->
						<!--begin::Aside toggler-->
						<div id="kt_aside_toggle" class="btn btn-icon w-auto px-0 btn-active-color-primary aside-toggle" data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body" data-kt-toggle-name="aside-minimize">
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr079.svg-->
							<span class="svg-icon svg-icon-1 rotate-180">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<path opacity="0.5" d="M14.2657 11.4343L18.45 7.25C18.8642 6.83579 18.8642 6.16421 18.45 5.75C18.0358 5.33579 17.3642 5.33579 16.95 5.75L11.4071 11.2929C11.0166 11.6834 11.0166 12.3166 11.4071 12.7071L16.95 18.25C17.3642 18.6642 18.0358 18.6642 18.45 18.25C18.8642 17.8358 18.8642 17.1642 18.45 16.75L14.2657 12.5657C13.9533 12.2533 13.9533 11.7467 14.2657 11.4343Z" fill="black" />
									<path d="M8.2657 11.4343L12.45 7.25C12.8642 6.83579 12.8642 6.16421 12.45 5.75C12.0358 5.33579 11.3642 5.33579 10.95 5.75L5.40712 11.2929C5.01659 11.6834 5.01659 12.3166 5.40712 12.7071L10.95 18.25C11.3642 18.6642 12.0358 18.6642 12.45 18.25C12.8642 17.8358 12.8642 17.1642 12.45 16.75L8.2657 12.5657C7.95328 12.2533 7.95328 11.7467 8.2657 11.4343Z" fill="black" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</div>
						<!--end::Aside toggler-->
					</div>
					<!--end::Brand-->
					<!--begin::Aside menu-->
					<div class="aside-menu flex-column-fluid">
						<!--begin::Aside Menu-->
						<div class="hover-scroll-overlay-y my-5 my-lg-5" id="kt_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-wrappers="#kt_aside_menu" data-kt-scroll-offset="0">
							<!--begin::Menu-->
							<div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500" id="#kt_aside_menu" data-kt-menu="true">
								<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
									<span class="menu-link">
										<span class="menu-icon">
											<!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
											<span class="svg-icon svg-icon-2">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<rect x="2" y="2" width="9" height="9" rx="2" fill="black" />
													<rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="black" />
													<rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="black" />
													<rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="black" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</span>
										<span class="menu-title">{{ __('dashboard.dashboard') }}</span>
										<span class="menu-arrow"></span>
									</span>
									<div class="menu-sub menu-sub-accordion menu-active-bg">
										<div class="menu-item">
											<a class="menu-link" href="{{route('home')}}">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">{{__('dashboard.home')}}</span>
											</a>
										</div>
									</div>
							 
									<span class="menu-link">
										<span class="menu-icon">
											<!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
											<span class="svg-icon svg-icon-2">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<rect x="2" y="2" width="9" height="9" rx="2" fill="black" />
													<rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="black" />
													<rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="black" />
													<rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="black" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</span>
										<span class="menu-title">{{__('dashboard.setting')}}</span>
										<span class="menu-arrow"></span>
									</span>
									<div class="menu-sub menu-sub-accordion menu-active-bg">
										<div class="menu-item">
											<a class="menu-link" href="{{route('association.index')}}">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">{{__('dashboard.association')}}</span>
											</a>
										</div>
									</div>
									<div class="menu-sub menu-sub-accordion menu-active-bg">
										<div class="menu-item">
											<a class="menu-link" href="{{route('goals.index')}}">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">{{__('dashboard.goals')}}</span>
											</a>
										</div>
									</div>
									<div class="menu-sub menu-sub-accordion menu-active-bg">
										<div class="menu-item">
											<a class="menu-link" href="{{route('vision.index')}}">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">{{__('dashboard.vision')}}</span>
											</a>
										</div>
									</div>
									<div class="menu-sub menu-sub-accordion menu-active-bg">
										<div class="menu-item">
											<a class="menu-link" href="{{route('messags.index')}}">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">{{__('dashboard.messags')}}</span>
											</a>
										</div>
									</div>
									<div class="menu-sub menu-sub-accordion menu-active-bg">
										<div class="menu-item">
											<a class="menu-link" href="{{route('home.setting')}}">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">{{__('dashboard.home')}}</span>
											</a>
										</div>
									</div>
									<div class="menu-sub menu-sub-accordion menu-active-bg">
										<div class="menu-item">
											<a class="menu-link" href="{{route('valuesPrinciples.index')}}">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">{{__('dashboard.valuesPrinciples')}}</span>
											</a>
										</div>
									</div>
									
									<span class="menu-link">
										<span class="menu-icon">
											<!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
											<span class="svg-icon svg-icon-2">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<rect x="2" y="2" width="9" height="9" rx="2" fill="black" />
													<rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="black" />
													<rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="black" />
													<rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="black" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</span>
										<span class="menu-title">{{__('dashboard.rolesAndPermission')}}</span>
										<span class="menu-arrow"></span>
									</span>
 										
									<div class="menu-sub menu-sub-accordion menu-active-bg">
										<div class="menu-item">
											<a class="menu-link" href="{{route('roles.index')}}">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">{{__('dashboard.roles')}}</span>
											</a>
										</div>
									</div>
									<div class="menu-sub menu-sub-accordion menu-active-bg">
										<div class="menu-item">
											<a class="menu-link" href="{{route('permissions.index')}}">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">{{__('dashboard.permissions')}}</span>
											</a>
										</div>
									</div>
									
									<div class="menu-sub menu-sub-accordion menu-active-bg">
										<div class="menu-item">
											<a class="menu-link" href="{{route('users.index')}}">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">{{__('dashboard.users')}}</span>
											</a>
										</div>
									</div>
									
								</div>
								<div class="menu-item">
									<div class="menu-content pt-8 pb-2">
										<span class="menu-section text-muted text-uppercase fs-8 ls-1">Crafted</span>
									</div>
								</div>
								<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
									<span class="menu-link">
										<span class="menu-icon">
											<!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm007.svg-->
											<span class="svg-icon svg-icon-2">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<path d="M21 9V11C21 11.6 20.6 12 20 12H14V8H20C20.6 8 21 8.4 21 9ZM10 8H4C3.4 8 3 8.4 3 9V11C3 11.6 3.4 12 4 12H10V8Z" fill="black" />
													<path d="M15 2C13.3 2 12 3.3 12 5V8H15C16.7 8 18 6.7 18 5C18 3.3 16.7 2 15 2Z" fill="black" />
													<path opacity="0.3" d="M9 2C10.7 2 12 3.3 12 5V8H9C7.3 8 6 6.7 6 5C6 3.3 7.3 2 9 2ZM4 12V21C4 21.6 4.4 22 5 22H10V12H4ZM20 12V21C20 21.6 19.6 22 19 22H14V12H20Z" fill="black" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</span>
										<span class="menu-title">{{ __('dashboard.Pages')}}</span>
										<span class="menu-arrow"></span>
									</span>
									<div class="menu-sub menu-sub-accordion menu-active-bg">
							 
									 
									 
									<div class="menu-item">
											<a class="menu-link" href="{{route('news.index')}}">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">{{__('dashboard.news')}}</span>
											</a>
										</div>	
										<div class="menu-item">
											<a class="menu-link" href="{{route('achievements.index')}}">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">{{__('dashboard.achievements')}}</span>
											</a>
										</div>

										<div class="menu-item">
											<a class="menu-link" href="{{route('partners.index')}}">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">{{__('dashboard.partners')}}</span>
											</a>
										</div>
										<div class="menu-item">
											<a class="menu-link" href="{{route('publicationsAndReports.index')}}">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">{{__('dashboard.publications_and_Reports')}}</span>
											</a>
										</div>
										<div class="menu-item">
											<a class="menu-link" href="{{route('visualLibraries.index')}}">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">{{__('dashboard.visual_libraries')}}</span>
											</a>
										</div>
										 
										<div class="menu-item">
											<a class="menu-link" href="{{route('donors.index')}}">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">{{__('dashboard.donors')}}</span>
											</a>
										</div>
										<div class="menu-item">
											<a class="menu-link" href="{{route('companies.index')}}">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">{{__('dashboard.companies')}}</span>
											</a>
										</div>
										<div class="menu-item">
											<a class="menu-link" href="{{route('employmentsOrders.index')}}">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">{{__('dashboard.employmentsOrders')}}</span>
											</a>
										</div>


										<div class="menu-item">
											<a class="menu-link" href="{{route('slider.index')}}">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">{{__('dashboard.slider')}}</span>
											</a>
										</div>
										<div class="menu-item">
											<a class="menu-link" href="{{route('volunteers.index')}}">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">{{__('dashboard.volunteers')}}</span>
											</a>
										</div>
										<div class="menu-item">
											<a class="menu-link" href="{{route('programs.index')}}">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">{{__('dashboard.programs')}}</span>
											</a>
										</div>
										<div class="menu-item">
											<a class="menu-link"  href="{{route('contactUs.index')}}">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">{{__('dashboard.contact_us')}}</span>
											</a>
										</div>
									</div>
								</div>
							 
								 
						 
							 
							 
							</div>
							<!--end::Menu-->
						</div>
						<!--end::Aside Menu-->
					</div>
					<!--end::Aside menu-->
					<!--begin::Footer-->
				 
					<!--end::Footer-->
				</div>
				<!--end::Aside-->
				</div>
			<!--end::Page-->
 