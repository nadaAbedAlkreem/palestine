 
 @extends('Dashboard.layout.app')
@section('content') 

    
<div class="container mt-5">
        <a href="{{ url('roles') }}" class="btn btn-outline-primary mx-1">Roles</a>
        <a href="{{ url('permissions') }}" class="btn btn-outline-dark mx-1">Permissions</a>
        <a href="{{ url('users') }}" class="btn btn-outline-info mx-1">Users</a>
    </div>

    <div class="container mt-2">
        <div class="row">
            <div class="col-md-12">

                @if (session('status'))
                    <div class="alert alert-success">{{ session('status') }}</div>
                @endif

                <div class="card mt-3">
                    <div class="card-body">
                    <select id="filter_column_type_user"  class="form-control"  >
                    <option value="-1">All</option>
                        @if(!empty($roles))
                         @foreach($roles as $id =>$name)
                            <option value="{{$id}}">{{$name}}</option>
                         @endforeach
                        @endif
                     </select>
                 
                    </div>
                    <div class="card-body">

                        <table class="data-table-users table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>full_name</th>
                                    <th>Email</th>
                                    <th>Roles</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                              
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
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
	    <script src='assets/js/custom/actions/users-action.js'></script>
 
  
 
                                         
    @endsection

 