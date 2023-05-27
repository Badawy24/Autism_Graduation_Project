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
							<h4 class="content-title mb-0 my-auto">Recommendation</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Healthcares</span>
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
									<h4 class="card-title mg-b-0">Healthcare Table</h4>
									<i class="mdi mdi-dots-horizontal text-gray"></i>
								</div>

                                <div class="card-body">
                                    <a class="btn ripple btn-primary" data-target="#modaldemo8" data-toggle="modal" href="">Add Healthcare</a>
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
                                                <th class="border-bottom-0">Healthcar Name</th>
												<th class="border-bottom-0">Healthcar Address</th>
												<th class="border-bottom-0">Healthcar Phone</th>
												<th class="border-bottom-0">Healthcar WebSite</th>
												<th class="border-bottom-0">Created</th>
												<th class="border-bottom-0">Edit</th>
												<th class="border-bottom-0">Delete</th>
											</tr>
										</thead>
										<tbody>
                                            <?php $i = 0?>
                                            @foreach ($allHealthcare as $healthcare )
                                            <tr>
												<td>{{ ++$i }}</td>
												<td>{{ $healthcare->healthcarName }}</td>
												<td>{{ $healthcare->healthcarAddress }}</td>
												<td>{{ $healthcare->healthcarPhone }}</td>
												<td>{{ $healthcare->healthcarWebSite }}</td>
												<td>{{ $healthcare->created_at }}</td>
												<td>
                                                    <a class="modal-effect btn btn-md btn-info" data-effect="effect-scale"
                                                        data-edit_id = "{{ $healthcare->id }}"
                                                        data-edit_healthcar_name= "{{ $healthcare->healthcarName }}"
                                                        data-edit_healthcar_address = "{{ $healthcare->healthcarAddress }}"
                                                        data-edit_healthcar_phone = "{{ $healthcare->healthcarPhone }}"
                                                        data-edit_healthcar_webSite = "{{ $healthcare->healthcarWebSite }}"
                                                        data-toggle="modal"
                                                        href="#exampleModal4"
                                                        title="Edit">
                                                        <i class="las la-pen"></i>
                                                    </a>
                                                </td>
												<td>
                                                    <a class="modal-effect btn btn-md btn-danger" data-effect="effect-scale"
                                                        data-delete_id = "{{ $healthcare->id }}"
                                                        data-delete_healthcar_name= "{{ $healthcare->healthcarName }}"
                                                        data-delete_healthcar_address = "{{ $healthcare->healthcarAddress }}"
                                                        data-delete_healthcar_phone = "{{ $healthcare->healthcarPhone }}"
                                                        data-delete_healthcar_webSite = "{{ $healthcare->healthcarWebSite }}"
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
						<h6 class="modal-title">ِAdd New HealthCare</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
					</div>
					<div class="modal-body" style="direction: ltr">
                        <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
                                <div class="card-body pt-2">
                                    <form method="POST" action="/addHealthcare" id="doctor-form" enctype="multipart/form-data">
                                        @csrf

                                            {{-- file --}}

                                            <div class="form-group">
                                                {{-- <label for="TitleAr">Title In Arabic</label> --}}
                                                <input required name="healthcarName" type="text" class="form-control" id="healthcarName" placeholder="Enter Healthcare Name">
                                            </div>

                                            <div class="form-group">
                                                {{-- <label for="TitleEn">Title In English</label> --}}
                                                <input required name="healthcarAddress" type="text" class="form-control" id="healthcarAddress" placeholder="Enter Healthcar Address	">
                                            </div>

                                            <div class="form-group">
                                                {{-- <label for="TitleEn">Title In English</label> --}}
                                                <input  name="healthcarPhone" type="text" class="form-control" id="healthcarPhone" placeholder="Phone">
                                            </div>

                                            <div class="form-group">
                                                {{-- <label for="TitleEn">Title In English</label> --}}
                                                <input  name="healthcarWebSite" type="text" class="form-control" id="healthcarWebSite" placeholder="Website Link ">
                                            </div>

                                    </form>
                            </div>
                        </div>
					</div>
					<div class="modal-footer">
						<button class="btn ripple btn-primary" type="submit"
                        href="/addHealthcare" onclick="event.preventDefault(); document.getElementById('doctor-form').submit();">
                        Add Healthcare</button>
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
						<h6 class="modal-title">Edit Healthcare</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
					</div>
					<div class="modal-body" style="direction: ltr">
                        <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
                                <div class="card-body pt-2">
                                    <form method="POST" action="/editHealthcare" id="edit-form" autocomplete="off" enctype="multipart/form-data" >
                                        {{-- @method('patch') --}}
                                        {{-- {{method_field('Post')}} --}}
                                        @csrf
                                        <input type="hidden" name="id" id="edit_id">

                                            {{-- file --}}


                                            <div class="form-group">
                                                <label for="healthcarName">Healthcare Name</label>
                                                <input required name="healthcarName" type="text" class="form-control" id="edit_healthcar_name" placeholder="Enter Healthcare Name">
                                            </div>

                                            <div class="form-group">
                                                <label for="healthcarAddress">Healthcare Address</label>
                                                <input required name="healthcarAddress" type="text" class="form-control" id="edit_healthcar_address" placeholder="Enter Healthcar Address	">
                                            </div>

                                            <div class="form-group">
                                                <label for="healthcarPhone">Phone</label>
                                                <input  name="healthcarPhone" type="text" class="form-control" id="edit_healthcar_phone" placeholder="Phone">
                                            </div>

                                            <div class="form-group">
                                                <label for="healthcarWebSite">Website Link</label>
                                                <input name="healthcarWebSite" type="text" class="form-control" id="edit_healthcar_webSite" placeholder="Website Link ">
                                            </div>

                                    </form>
                            </div>
                        </div>
					</div>
					<div class="modal-footer">
						<button class="btn ripple btn-success" type="submit"
                        href="/editHealthcare" onclick="event.preventDefault(); document.getElementById('edit-form').submit();">
                        Update Healthcare</button>
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
						<h6 class="modal-title">Delete Healthcare</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
					</div>
					<div class="modal-body" style="direction: ltr">
                        <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
                                <div class="card-body pt-2">
                                    <form method="POST" action="/deleteHealthcare" id="delete-form" autocomplete="off" enctype="multipart/form-data" >
                                        {{-- @method('patch') --}}
                                        {{-- {{method_field('Post')}} --}}
                                        @csrf
                                        <input type="hidden" name="id" id="delete_id">

                                            {{-- file --}}

                                        <p class="lead text-center text-danger">
                                            Are you sure you want to delete this Healthcare ?
                                        </p>
                                        <div class="form-group">
                                            <label for="delete_healthcar_name">Healthcare Name</label>
                                            <input disabled name="healthcareName" type="text" class="form-control" id="delete_healthcar_name">
                                        </div>

                                    </form>
                            </div>
                        </div>
					</div>
					<div class="modal-footer">
						<button class="btn ripple btn-danger" type="submit"
                        href="/deleteHealthcare" onclick="event.preventDefault(); document.getElementById('delete-form').submit();">
                        Delete Healthcare</button>
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
        var edit_healthcar_name = button.data('edit_healthcar_name')
        var edit_healthcar_address = button.data('edit_healthcar_address')
        var edit_healthcar_phone = button.data('edit_healthcar_phone')
        var edit_healthcar_webSite = button.data('edit_healthcar_webSite')
        var modal = $(this)
        modal.find('.modal-body #edit_id').val(edit_id);
        // modal.find('.modal-body #edit_img').val(edit_img);
        modal.find('.modal-body #edit_healthcar_name').val(edit_healthcar_name);
        modal.find('.modal-body #edit_healthcar_address').val(edit_healthcar_address);
        modal.find('.modal-body #edit_healthcar_phone').val(edit_healthcar_phone);
        modal.find('.modal-body #edit_healthcar_webSite').val(edit_healthcar_webSite);
        // document.getElementById('profile-img').src(edit_img);
        // document.getElementById('profile-img').src = edit_img;

    })
</script>
<script>
    $('#exampleModal5').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget)
        var delete_id = button.data('delete_id')
        var delete_healthcar_name = button.data('delete_healthcar_name')
        var delete_healthcar_address = button.data('delete_healthcar_address')
        var delete_healthcar_phone = button.data('delete_healthcar_phone')
        var delete_healthcar_webSite = button.data('delete_healthcar_webSite')
        var modal = $(this)
        modal.find('.modal-body #delete_id').val(delete_id);
        // modal.find('.modal-body #delete_img').val(delete_img);
        modal.find('.modal-body #delete_healthcar_name').val(delete_healthcar_name);
        modal.find('.modal-body #delete_healthcar_address').val(delete_healthcar_address);
        modal.find('.modal-body #delete_healthcar_phone').val(delete_healthcar_phone);
        modal.find('.modal-body #delete_healthcar_webSite').val(delete_healthcar_webSite);
        // document.getElementById('profile-img').src(delete_img);
        // document.getElementById('delete-img').src = delete_img;

    })
</script>
@endsection
