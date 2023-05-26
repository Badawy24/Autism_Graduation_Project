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
							<h4 class="content-title mb-0 my-auto">Recommendation</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Doctors</span>
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
									<h4 class="card-title mg-b-0">Doctors Table</h4>
									<i class="mdi mdi-dots-horizontal text-gray"></i>
								</div>

                                <div class="card-body">
                                    <a class="btn ripple btn-primary" data-target="#modaldemo8" data-toggle="modal" href="">Add Doctor</a>
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
									<table id="example" class="table key-buttons text-md-nowrap">
										<thead>
											<tr>
												<th class="border-bottom-0">#</th>
                                                <th class="border-bottom-0">Doctor Image</th>
												<th class="border-bottom-0">First Name</th>
												<th class="border-bottom-0">Last Name</th>
												<th class="border-bottom-0">Email</th>
												<th class="border-bottom-0">Doctor Address</th>
												<th class="border-bottom-0">Doctor Phone</th>
												<th class="border-bottom-0">Doctor Description</th>
												<th class="border-bottom-0">Doctor Hospital</th>
												<th class="border-bottom-0">Created</th>
												<th class="border-bottom-0">Edit</th>
												<th class="border-bottom-0">Delete</th>
											</tr>
										</thead>
										<tbody>
                                            <?php $i = 0?>
                                            @foreach ($doctors as $doctor )
                                            <tr>
												<td>{{ ++$i }}</td>
												<td>
                                                    <img src="{{asset('images/doc_images').'/'.$doctor->docImage }}" alt="{{ $doctor->docImage }}" width="50" height="50">
                                                </td>
												<td>{{ $doctor->firstName }}</td>
												<td>{{ $doctor->lastName }}</td>
												<td>{{ $doctor->email }}</td>
												<td>{{ $doctor->doctorAddress }}</td>
												<td>{{ $doctor->doctorPhone }}</td>
												<td>{{ $doctor->doctorDesc }}</td>
												<td>{{ $doctor->doctorHospital }}</td>
												<td>{{ $doctor->created_at }}</td>
												<td>
                                                    <a class="modal-effect btn btn-md btn-info" data-effect="effect-scale"
                                                        data-edit_id = "{{ $doctor->id }}"
                                                        data-edit_img= "/images/doc_images/{{ $doctor->docImage }}"
                                                        data-edit_first_name= "{{ $doctor->firstName }}"
                                                        data-edit_last_name = "{{ $doctor->lastName }}"
                                                        data-edit_email = "{{ $doctor->email }}"
                                                        data-edit_doctor_address = "{{ $doctor->doctorAddress }}"
                                                        data-edit_doctor_phone = "{{ $doctor->doctorPhone }}"
                                                        data-edit_doctor_desc = "{{ $doctor->doctorDesc }}"
                                                        data-edit_doctor_hospital = "{{ $doctor->doctorHospital }}"
                                                        data-toggle="modal"
                                                        href="#exampleModal4"
                                                        title="Edit">
                                                        <i class="las la-pen"></i>
                                                    </a>
                                                </td>
												<td>
                                                    <a class="modal-effect btn btn-md btn-danger" data-effect="effect-scale"
                                                        data-delete_id = "{{ $doctor->id }}"
                                                        data-delete_img= "/images/doc_images/{{ $doctor->docImage }}"
                                                        data-delete_first_name= "{{ $doctor->firstName }}"
                                                        data-delete_last_name = "{{ $doctor->lastName }}"
                                                        data-delete_email = "{{ $doctor->email }}"
                                                        data-delete_doctor_address = "{{ $doctor->doctorAddress }}"
                                                        data-delete_doctor_phone = "{{ $doctor->doctorPhone }}"
                                                        data-delete_doctor_desc = "{{ $doctor->doctorDesc }}"
                                                        data-delete_doctor_hospital = "{{ $doctor->doctorHospital }}"
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
						<h6 class="modal-title">ِAdd New Doctor</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
					</div>
					<div class="modal-body" style="direction: ltr">
                        <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
                                <div class="card-body pt-2">
                                    <form method="POST" action="/addDoctor" id="doctor-form" enctype="multipart/form-data">
                                        @csrf
                                            <div class="child-image mb-3">
                                                <label class="upload-child-image">
                                                    <input required name="docImage" id="img-upload" type="file"/>
                                                </label>
                                            </div>
                                            {{-- file --}}

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
                                                <input  name="docAddress" type="text" class="form-control" id="docAddress" placeholder="Enter Address">
                                            </div>

                                            <div class="form-group">
                                                {{-- <label for="TitleEn">Title In English</label> --}}
                                                <input  name="docPhone" type="text" class="form-control" id="docPhone" placeholder="Enter Phone">
                                            </div>

                                            <div class="form-group">
                                                {{-- <label for="TitleEn">Title In English</label> --}}
                                                <input  name="docHospital" type="text" class="form-control" id="docHospital" placeholder="Enter Hospital">
                                            </div>

                                            <div class="form-group">
                                                {{-- <label for="DescAr">Description In Arabic</label> --}}
                                                <textarea  name="docDesc" class="form-control" id="docDesc" placeholder="Doctor Description..." rows="3"></textarea>
                                                {{-- <input required name="DescAr" type="text" class="form-control" id="DescAr" placeholder="Enter Description In Arabic"> --}}
                                            </div>

                                    </form>
                            </div>
                        </div>
					</div>
					<div class="modal-footer">
						<button class="btn ripple btn-primary" type="submit"
                        href="/addDoctor" onclick="event.preventDefault(); document.getElementById('doctor-form').submit();">
                        Add Doctor</button>
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
						<h6 class="modal-title">Edit Course</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
					</div>
					<div class="modal-body" style="direction: ltr">
                        <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
                                <div class="card-body pt-2">
                                    <form method="POST" action="/editDoctor" id="edit-form" autocomplete="off" enctype="multipart/form-data" >
                                        {{-- @method('patch') --}}
                                        {{-- {{method_field('Post')}} --}}
                                        @csrf
                                        <input type="hidden" name="id" id="edit_id">
                                            <div class="child-image mb-3 text-center">
                                                <label class="upload-child-image">
                                                    <img id="profile-img" src="" width="200" height="200"/>
                                                    <br /><br />
                                                    <input name="courseImg" id="edit_img" type="file"/>
                                                    {{-- <input id="img-upload" type="file" name="image" onchange="updateProfileImage()"/> --}}
                                                </label>
                                            </div>
                                            {{-- file --}}

                                            
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

                                            <div class="form-group">
                                                <label for="docAddress">Address</label>
                                                <input  name="docAddress" type="text" class="form-control" id="edit_doctor_address" placeholder="Enter Address">
                                            </div>

                                            <div class="form-group">
                                                <label for="docPhone">Phone</label>
                                                <input  name="docPhone" type="text" class="form-control" id="edit_doctor_phone" placeholder="Enter Phone">
                                            </div>

                                            <div class="form-group">
                                                <label for="docHospital">Hospital</label>
                                                <input  name="docHospital" type="text" class="form-control" id="edit_doctor_hospital" placeholder="Enter Hospital">
                                            </div>

                                            <div class="form-group">
                                                <label for="docDesc">Description</label>
                                                <textarea  name="docDesc" class="form-control" id="edit_doctor_desc" placeholder="Doctor Description..." rows="3"></textarea>
                                                {{-- <input required name="DescAr" type="text" class="form-control" id="DescAr" placeholder="Enter Description In Arabic"> --}}
                                            </div>

                                    </form>
                            </div>
                        </div>
					</div>
					<div class="modal-footer">
						<button class="btn ripple btn-success" type="submit"
                        href="/editDoctor" onclick="event.preventDefault(); document.getElementById('edit-form').submit();">
                        Update Doctor</button>
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
						<h6 class="modal-title">Delete Doctor</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
					</div>
					<div class="modal-body" style="direction: ltr">
                        <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
                                <div class="card-body pt-2">
                                    <form method="POST" action="/deleteDoctor" id="delete-form" autocomplete="off" enctype="multipart/form-data" >
                                        {{-- @method('patch') --}}
                                        {{-- {{method_field('Post')}} --}}
                                        @csrf
                                        <input type="hidden" name="id" id="delete_id">
                                            <div class="child-image mb-3 text-center">
                                                <label class="upload-child-image">
                                                    <img id="delete-img" src="" width="200" height="200"/>
                                                    <br /><br />
                                                    {{-- <input hidden name="courseImg" id="delete_img" type="file"/> --}}
                                                    {{-- <input disabled id="img-upload" type="file" name="image" onchange="updateProfileImage()"/> --}}
                                                </label>
                                            </div>
                                            {{-- file --}}

                                            <p class="lead text-center text-danger">
                                                Are you sure you want to delete this Doctor ?
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
                        href="/deletecourse" onclick="event.preventDefault(); document.getElementById('delete-form').submit();">
                        Delete Doctor</button>
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
        var edit_img = button.data('edit_img')
        var edit_first_name = button.data('edit_first_name')
        var edit_last_name = button.data('edit_last_name')
        var edit_email = button.data('edit_email')
        var edit_doctor_address = button.data('edit_doctor_address')
        var edit_doctor_phone = button.data('edit_doctor_phone')
        var edit_doctor_desc = button.data('edit_doctor_desc')
        var edit_doctor_hospital = button.data('edit_doctor_hospital')
        var modal = $(this)
        modal.find('.modal-body #edit_id').val(edit_id);
        // modal.find('.modal-body #edit_img').val(edit_img);
        modal.find('.modal-body #edit_first_name').val(edit_first_name);
        modal.find('.modal-body #edit_last_name').val(edit_last_name);
        modal.find('.modal-body #edit_email').val(edit_email);
        modal.find('.modal-body #edit_doctor_address').val(edit_doctor_address);
        modal.find('.modal-body #edit_doctor_phone').val(edit_doctor_phone);
        modal.find('.modal-body #edit_doctor_desc').val(edit_doctor_desc);
        modal.find('.modal-body #edit_doctor_hospital').val(edit_doctor_hospital);
        // document.getElementById('profile-img').src(edit_img);
        document.getElementById('profile-img').src = edit_img;

    })
</script>
<script>
    $('#exampleModal5').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget)
        var delete_id = button.data('delete_id')
        var delete_img = button.data('delete_img')
        var delete_first_name = button.data('delete_first_name')
        var delete_last_name = button.data('delete_last_name')
        var delete_email = button.data('delete_email')
        var delete_doctor_address = button.data('delete_doctor_address')
        var delete_doctor_phone = button.data('delete_doctor_phone')
        var delete_doctor_desc = button.data('delete_doctor_desc')
        var delete_doctor_hospital = button.data('delete_doctor_hospital')
        var modal = $(this)
        modal.find('.modal-body #delete_id').val(delete_id);
        // modal.find('.modal-body #delete_img').val(delete_img);
        modal.find('.modal-body #delete_first_name').val(delete_first_name);
        modal.find('.modal-body #delete_last_name').val(delete_last_name);
        modal.find('.modal-body #delete_email').val(delete_email);
        modal.find('.modal-body #delete_doctor_address').val(delete_doctor_address);
        modal.find('.modal-body #delete_doctor_phone').val(delete_doctor_phone);
        modal.find('.modal-body #delete_doctor_desc').val(delete_doctor_desc);
        modal.find('.modal-body #delete_doctor_hospital').val(delete_doctor_hospital);
        // document.getElementById('profile-img').src(delete_img);
        document.getElementById('delete-img').src = delete_img;

    })
</script>
@endsection
