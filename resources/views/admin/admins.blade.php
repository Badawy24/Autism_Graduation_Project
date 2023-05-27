@extends('admin.layouts.master')
@section('css')
<link href="{{URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/datatable/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('assets/plugins/datatable/css/jquery.dataTables.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/datatable/css/responsive.dataTables.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">Users</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Admins</span>
						</div>
					</div>

				</div>
				<!-- breadcrumb -->
@endsection
@section('content')
				<!-- row -->
				<div class="row">

                    <!--div-->
					<div class="col-xl-12">
						<div class="card mg-b-20">
							<div class="card-header pb-0">
								<div class="d-flex justify-content-between">
									<h4 class="card-title mg-b-0">Admins Data</h4>
									<i class="mdi mdi-dots-horizontal text-gray"></i>
								</div>

                                <div class="card-body">
                                    <a class="btn ripple btn-primary" data-target="#modaldemo8" data-toggle="modal" href="">Add New Admin</a>
                                </div>
                                @if (Session::has('succes'))
                                <div class="col-md-2 text-center alert alert-success d-flex align-items-center" role="alert" style="direction: ltr">
                                    <i class="fa-solid fa-triangle-exclamation"></i>
                                    <div> {{ Session::get('succes') }} </div>
                                </div>
                                @endif
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table id="example1" class="table key-buttons text-md-nowrap">
										<thead>
											<tr>
												<th class="border-bottom-0">#</th>
												<th class="border-bottom-0">First Name</th>
												<th class="border-bottom-0">Last Name</th>
												<th class="border-bottom-0">Email</th>
												<th class="border-bottom-0">Created</th>
												<th class="border-bottom-0">Edit</th>
												<th class="border-bottom-0">Delete</th>
											</tr>
										</thead>
										<tbody>
                                            <?php $i = 0?>
                                            @foreach ($admins as $admin )
                                            <tr>
												<td>{{ ++$i }}</td>
												<td>{{ $admin->firstName }}</td>
												<td>{{ $admin->lastName }}</td>
												<td>{{ $admin->email }}</td>
												<td>{{ $admin->created_at }}</td>
												<td>
                                                    <a class="modal-effect btn btn-md btn-info" data-effect="effect-scale"
                                                        data-edit_id = "{{ $admin->id }}"
                                                        data-edit_first_name= "{{ $admin->firstName }}"
                                                        data-edit_last_name = "{{ $admin->lastName }}"
                                                        data-edit_email = "{{ $admin->email }}"
                                                        data-toggle="modal"
                                                        href="#exampleModal4"
                                                        title="Edit">
                                                        <i class="las la-pen"></i>
                                                    </a>
                                                </td>
												<td>
                                                    <a class="modal-effect btn btn-md btn-danger" data-effect="effect-scale"
                                                        data-delete_id = "{{ $admin->id }}"
                                                        data-delete_first_name= "{{ $admin->firstName }}"
                                                        data-delete_last_name = "{{ $admin->lastName }}"
                                                        data-delete_email = "{{ $admin->email }}"
                                                        data-toggle="modal"
                                                        href="#exampleModal5"
                                                        title="Delete">
                                                        <i class="las la-trash"></i>
                                                    </a>
                                                </td>
											</tr>
                                            @endforeach
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<!--/div-->

				</div>
				<!-- row closed -->
			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->

        <!-- Modal effects -->
		<div class="modal" id="modaldemo8">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content modal-content-demo">
					<div class="modal-header">
						<h6 class="modal-title">ِAdd New Admin</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
					</div>
					<div class="modal-body" style="direction: ltr">
                        <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
                                <div class="card-body pt-2">
                                    <form method="POST" action="/addAdmin" id="doctor-form" enctype="multipart/form-data">
                                        @csrf
                                            {{-- file --}}
                                            <input type="hidden" name="type" value="admin">
                                            <div class="form-group">
                                                {{-- <label for="TitleAr">Title In Arabic</label> --}}
                                                <input required name="firstName" type="text" class="form-control" id="firstName" placeholder="Enter First Name">
                                            </div>

                                            <div class="form-group">
                                                {{-- <label for="TitleEn">Title In English</label> --}}
                                                <input required name="lastName" type="text" class="form-control" id="lastName" placeholder="Enter Last Name">
                                            </div>

                                            <div class="form-group">
                                                {{-- <label for="TitleEn">Title In English</label> --}}
                                                <input  name="email" type="email" class="form-control" id="email" placeholder="Enter Email">
                                            </div>

                                            <div class="form-group">
                                                {{-- <label for="TitleEn">Title In English</label> --}}
                                                <input  name="password" type="password" class="form-control" id="password" placeholder="Enter Password">
                                            </div>

                                    </form>
                            </div>
                        </div>
					</div>
					<div class="modal-footer">
						<button class="btn ripple btn-primary" type="submit"
                        href="/addAdmin" onclick="event.preventDefault(); document.getElementById('doctor-form').submit();">
                        Add Admin</button>
						<button class="btn ripple btn-secondary" data-dismiss="modal" type="button">Close</button>
					</div>
				</div>
			</div>
		</div>
		<!-- End Modal effects-->


        <!-- Modal Edit -->
		<div class="modal" id="exampleModal4">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content modal-content-demo">
					<div class="modal-header">
						<h6 class="modal-title">Edit Admin</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
					</div>
					<div class="modal-body" style="direction: ltr">
                        <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
                                <div class="card-body pt-2">
                                    <form method="POST" action="/editAdmin" id="edit-form" autocomplete="off" enctype="multipart/form-data" >
                                        {{-- @method('patch') --}}
                                        {{-- {{method_field('Post')}} --}}
                                        @csrf
                                        <input type="hidden" name="id" id="edit_id">
                                        <div class="form-group">
                                            <label for="firstName">First Name</label>
                                            <input required name="firstName" type="text" class="form-control" id="edit_first_name" placeholder="Enter First Name">
                                        </div>

                                        <div class="form-group">
                                            <label for="lastName">Last Name</label>
                                            <input required name="lastName" type="text" class="form-control" id="edit_last_name" placeholder="Enter Last Name">
                                        </div>

                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input  name="email" type="email" class="form-control" id="edit_email" placeholder="Enter Email">
                                        </div>

                                    </form>
                            </div>
                        </div>
					</div>
					<div class="modal-footer">
						<button class="btn ripple btn-success" type="submit"
                        href="/editAdmin" onclick="event.preventDefault(); document.getElementById('edit-form').submit();">
                        Update Admin</button>
						<button class="btn ripple btn-secondary" data-dismiss="modal" type="button">Close</button>
					</div>
				</div>
			</div>
		</div>
		<!-- End Modal Edit-->

        <!-- Modal Delete -->
		<div class="modal" id="exampleModal5">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content modal-content-demo">
					<div class="modal-header">
						<h6 class="modal-title">Delete Admin</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
					</div>
					<div class="modal-body" style="direction: ltr">
                        <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
                                <div class="card-body pt-2">
                                    <form method="POST" action="/deleteAdmin" id="delete-form" autocomplete="off" enctype="multipart/form-data" >
                                        {{-- @method('patch') --}}
                                        {{-- {{method_field('Post')}} --}}
                                        @csrf
                                        <input type="hidden" name="id" id="delete_id">
                                            
                                            {{-- file --}}

                                            <p class="lead text-center text-danger">
                                                Are you sure you want to delete this Admin ?
                                            </p>
                                            <div class="form-group">
                                                <label for="firstName">First Name</label>
                                                <input disabled name="firstName" type="text" class="form-control" id="delete_first_name">
                                            </div>

                                            <div class="form-group">
                                                <label for="lastName">Last Name</label>
                                                <input disabled name="lastName" type="text" class="form-control" id="delete_last_name">
                                            </div>

                                    </form>
                            </div>
                        </div>
					</div>
					<div class="modal-footer">
						<button class="btn ripple btn-danger" type="submit"
                        href="/deleteAdmin" onclick="event.preventDefault(); document.getElementById('delete-form').submit();">
                        Delete Admin</button>
						<button class="btn ripple btn-secondary" data-dismiss="modal" type="button">Close</button>
					</div>
				</div>
			</div>
		</div>
		<!-- End Modal Delete-->


@endsection
@section('js')
<!-- Internal Data tables -->
<script src="{{URL::asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.dataTables.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/responsive.dataTables.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/jquery.dataTables.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.bootstrap4.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.buttons.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/jszip.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/pdfmake.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/vfs_fonts.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.html5.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.print.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.colVis.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/responsive.bootstrap4.min.js')}}"></script>
<!--Internal  Datatable js -->
<script src="{{URL::asset('assets/js/table-data.js')}}"></script>
<script>
    $('#exampleModal4').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget)
        var edit_id = button.data('edit_id')
        var edit_first_name = button.data('edit_first_name')
        var edit_last_name = button.data('edit_last_name')
        var edit_email = button.data('edit_email')
        var edit_password = button.data('edit_password')
        var modal = $(this)
        modal.find('.modal-body #edit_id').val(edit_id);
        // modal.find('.modal-body #edit_img').val(edit_img);
        modal.find('.modal-body #edit_first_name').val(edit_first_name);
        modal.find('.modal-body #edit_last_name').val(edit_last_name);
        modal.find('.modal-body #edit_email').val(edit_email);
        modal.find('.modal-body #edit_password').val(edit_password);
        // document.getElementById('profile-img').src(edit_img);
        

    })
</script>
<script>
    $('#exampleModal5').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget)
        var delete_id = button.data('delete_id')
        var delete_first_name = button.data('delete_first_name')
        var delete_last_name = button.data('delete_last_name')
        var delete_email = button.data('delete_email')
        var delete_password = button.data('delete_password]')
        var modal = $(this)
        modal.find('.modal-body #delete_id').val(delete_id);
        // modal.find('.modal-body #delete_img').val(delete_img);
        modal.find('.modal-body #delete_first_name').val(delete_first_name);
        modal.find('.modal-body #delete_last_name').val(delete_last_name);
        modal.find('.modal-body #delete_email').val(delete_email);
        modal.find('.modal-body #delete_password').val(delete_password);
        // document.getElementById('profile-img').src(delete_img);

    })
</script>
@endsection
