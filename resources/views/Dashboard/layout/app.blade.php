<!DOCTYPE html>
 
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<!--begin::Head-->
	<head><base href="../../../">
		<title>{{__('dashboard.Palestine_Educational_Society_for_Environmental_Protection')}}</title>
		<meta charset="utf-8" />
 		<meta name="current-lang" content="{{ app()->getLocale() }}">
		<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
		<meta name="description" content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 94,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue &amp; Laravel versions. Grab your copy now and get life-time updates for free." />
		<meta name="keywords" content="Metronic, bootstrap, bootstrap 5, Angular, VueJs, React, Laravel, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="Metronic - Bootstrap 5 HTML, VueJS, React, Angular &amp; Laravel Admin Dashboard Theme" />
		<meta property="og:url" content="https://keenthemes.com/metronic" />
		<meta property="og:site_name" content="{{__('dashboard.Palestine_Educational_Society_for_Environmental_Protection')}}" />
		<link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
		<link rel="icon" href="{{ asset('images/palestine_.png') }}" type="image/x-icon" />
      <!-- <script src="https://cdn.tiny.cloud/1/nddxbuy13xuya71p7x96784ek19lsnl8ab64xj9axbing6px/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script> --> -->
	  <!-- <link href="{{url('assets/plugins/tinymce/js/tinymce/tinymce.min.js')}}" rel="stylesheet" type="text/css" /> -->
	  <!-- <script src="https://cdn.tiny.cloud/1/nddxbuy13xuya71p7x96784ek19lsnl8ab64xj9axbing6px/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script> -->

		<!-- <script>
			tinymce.init({
				selector: 'textarea1',
				plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
				toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
			});
		</script>   -->
		<!-- <script src="https://cdn.tiny.cloud/1/nddxbuy13xuya71p7x96784ek19lsnl8ab64xj9axbing6px/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script> -->

			<!--begin::Fonts-->
			<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts--> <script>
 
    </script>
		<!--begin::Page Vendor Stylesheets(used by this page)-->
		<link href="{{url('assets/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />
		<!--end::Page Vendor Stylesheets-->
 
		<!--begin::Global Stylesheets Bundle(used by all pages)-->
		<link href="{{url('assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{url('assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
		<meta name="csrf-token" content="{{ csrf_token() }}" />
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Page Vendor Stylesheets(used by this page)-->
		<link href="{{url('assets/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />
		<!--end::Page Vendor Stylesheets-->
		<!--begin::Global Stylesheets Bundle(used by all pages)-->
 		<link href="{{url('assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />

        <!-- <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script> -->

<!-- <script>tinymce.init({selector:'textarea'});</script> -->
		<!--end::Global Stylesheets Bundle-->
	</head>
        @include('Dashboard.asset.css') 
	
	</head>
	 
     <body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed aside-enabled aside-fixed" style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
 		<!--begin::Main-->
		<!--begin::Root-->
	<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
        <div class="page d-flex flex-row flex-column-fluid">
                @include('Dashboard.compenents.drawer')

           <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper"> 

                @include('Dashboard.compenents.header')

                @yield('content')
             

            </div>
		
       </div>
    </div>           
 
	@include('Dashboard.compenents.footer')
	     @include('Dashboard.asset.js')


 
 
</body>
</html>
