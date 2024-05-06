@extends('Dashboard.layout.app')

@section('content')

 
	 <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
 
	<!--begin::Body-->
	<body id="kt_body">

		<!--begin::Main-->
		<!--begin::Root-->
 		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="page d-flex flex-row flex-column-fluid">
				<!--begin::Aside-->
			 
				<!--end::Aside-->
				<!--begin::Wrapper-->
				<div class="d-flex flex-column flex-row-fluid" id="kt_wrapper">
	 
					
					<!--begin::Content-->
					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Container-->
						<div class="container-fluid" id="kt_content_container">
							<!--begin::Products-->
							<div class="card card-flush">
								<!--begin::Card header-->
								<div class="card-header align-items-center py-5 gap-2 gap-md-5">
									<!--begin::Card title-->
									 
									<!--end::Card title-->
									<!--begin::Card toolbar-->
									<div class="">
									 
										<a href="{{route('news.create')}}"       class="btn btn-primary">{{__('button.AddNews')}}</a>
										<!--end::Add product-->
									</div>
									<!--end::Card toolbar-->
								</div>
								<!--end::Card header-->
								<!--begin::Card body-->
								
								<div class="card-body pt-0">
									<!--begin::Table-->
									<table class="table  align-middle table-row-dashed fs-6 gy-5 data-table-news" id="kt_ecommerce_products_table">
										<!--begin::Table head-->
										<thead>
											<!--begin::Table row-->
											<tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                        
												<th class="min-w-100px">{{__('columns.title')}}</th>
                                                <th class="min-w-100px">{{__('columns.date')}} </th>
                                                <th class="min-w-100px">{{__('columns.description')}}</th>
  												<th class="min-w-100px">{{__('columns.location')}}</th>
                                                <th class="min-w-100px">{{__('columns.action')}}</th>
 
											</tr>
											<!--end::Table row-->
										</thead>
							 
										<tbody class="fw-bold text-gray-600">
                                      
										</tbody>
										<!--end::Table body-->
									</table>
									<!--end::Table-->
 
                                    </div>

                                  
	
	</body>
	

		<script>var hostUrl = "assets/";</script>
		<!--begin::Global Javascript Bundle(used by all pages)-->
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
	    <script src="{{url('assets/js/custom/actions/news-actions.js')}}"></script>
 
  
 
 @endsection