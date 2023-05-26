@extends('admin.layouts.master')
@section('css')
<!-- Internal Data table css -->
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
							<h4 class="content-title mb-0 my-auto">Courses</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Courses</span>
						</div>
					</div>

				</div>
				<!-- breadcrumb -->
@endsection
@section('content')
				<!-- row -->
                <div class="row row-sm">
					<!--div-->
					<div class="col-xl-12">
						<div class="card mg-b-20">
							<div class="card-header pb-0">
								<div class="d-flex justify-content-between">
									<h4 class="card-title mg-b-0">Courses Table</h4>
									<i class="mdi mdi-dots-horizontal text-gray"></i>
								</div>

                                <div class="card-body">
                                    <a class="btn ripple btn-primary" data-target="#modaldemo8" data-toggle="modal" href="">Add Courses</a>
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
												<th class="border-bottom-0">Image</th>
												<th class="border-bottom-0">Title Arabic</th>
												<th class="border-bottom-0">Title English</th>
												<th class="border-bottom-0">Description Arabic</th>
												<th class="border-bottom-0">Description Engilsh</th>
												<th class="border-bottom-0">Type</th>
												<th class="border-bottom-0">Created</th>
												<th class="border-bottom-0">Edit</th>
												<th class="border-bottom-0">Delete</th>
											</tr>
										</thead>
										<tbody>
                                            <?php $i = 0?>
                                            @foreach ($courses as $course )
                                            <tr>
												<td>{{ ++$i }}</td>
												<td>
                                                    <img src="{{asset('images/courses_images').'/'.$course->courseImage }}" alt="{{ $course->courseImage }}" width="50" height="50">
                                                </td>
												<td>{{ $course->courseTitleAr }}</td>
												<td>{{ $course->courseTitleEn }}</td>
												<td>{{ $course->courseDescriptionAr }}</td>
												<td>{{ $course->courseDescriptionEn }}</td>
												<td>{{ $course->courseType }}</td>
												<td>{{ $course->created_at }}</td>
												<td>
                                                    <a class="modal-effect btn btn-md btn-info" data-effect="effect-scale"
                                                        data-edit_id = "{{ $course->id }}"
                                                        data-edit_img= "/images/courses_images/{{ $course->courseImage }}"
                                                        data-edit_title_ar= "{{ $course->courseTitleAr }}"
                                                        data-edit_title_en = "{{ $course->courseTitleEn }}"
                                                        data-edit_desc_ar = "{{ $course->courseDescriptionAr }}"
                                                        data-edit_desc_en = "{{ $course->courseDescriptionEn }}"
                                                        data-edit_type = "{{ $course->courseType }}"
                                                        data-toggle="modal"
                                                        href="#exampleModal4"
                                                        title="Edit">
                                                        <i class="las la-pen"></i>
                                                    </a>
                                                </td>
												<td>
                                                    <a class="modal-effect btn btn-md btn-danger" data-effect="effect-scale"
                                                        data-delete_id = "{{ $course->id }}"
                                                        data-delete_img= "/images/courses_images/{{ $course->courseImage }}"
                                                        data-delete_title_ar= "{{ $course->courseTitleAr }}"
                                                        data-delete_title_en = "{{ $course->courseTitleEn }}"
                                                        data-delete_desc_ar = "{{ $course->courseDescriptionAr }}"
                                                        data-delete_desc_en = "{{ $course->courseDescriptionEn }}"
                                                        data-delete_type = "{{ $course->courseType }}"
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
						<h6 class="modal-title">ِAdd New Course</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
					</div>
					<div class="modal-body" style="direction: ltr">
                        <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
                                <div class="card-body pt-2">
                                    <form method="POST" action="/addcourse" id="course-form" enctype="multipart/form-data">
                                        @csrf
                                            <div class="child-image mb-3">
                                                <label class="upload-child-image">
                                                    <input required name="courseImg" id="img-upload" type="file" name="image" onchange="updateProfileImage()"/>
                                                </label>
                                            </div>
                                            {{-- file --}}

                                            <div class="form-group">
                                                {{-- <label for="TitleAr">Title In Arabic</label> --}}
                                                <input required name="TitleAr" type="text" class="form-control" id="TitleAr" placeholder="Enter Title In Arabic">
                                            </div>

                                            <div class="form-group">
                                                {{-- <label for="TitleEn">Title In English</label> --}}
                                                <input required name="TitleEn" type="text" class="form-control" id="TitleEn" placeholder="Enter Title In English">
                                            </div>

                                            <div class="form-group">
                                                {{-- <label for="DescAr">Description In Arabic</label> --}}
                                                <textarea required name="DescAr" class="form-control" id="DescAr" placeholder="Enter Description In Arabic" rows="3"></textarea>
                                                {{-- <input required name="DescAr" type="text" class="form-control" id="DescAr" placeholder="Enter Description In Arabic"> --}}
                                            </div>

                                            <div class="form-group">
                                                {{-- <label for="DescEn">Description In English</label> --}}
                                                <textarea required name="DescEn" class="form-control" id="DescEn" placeholder="Enter Description In English" rows="3"></textarea>
                                                {{-- <input required name="DescEn" type="text" class="form-control" id="DescEn" placeholder="Enter Description In English"> --}}
                                            </div>

                                            <div class="form-group">
                                                {{-- <label for="type">Type Of Course</label> --}}
                                                {{-- <input required type="email" class="form-control" id="DescEn" placeholder="Enter Description In English"> --}}
                                                <select required name="type" id="type" class="form-control">
                                                    <option value="ar">Arabic</option>
                                                    <option value="en">English</option>
                                                </select>
                                            </div>

                                    </form>
                            </div>
                        </div>
					</div>
					<div class="modal-footer">
						<button class="btn ripple btn-primary" type="submit"
                        href="/addcourse" onclick="event.preventDefault(); document.getElementById('course-form').submit();">
                        Add Course</button>
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
                                    <form method="POST" action="/editcourse" id="edit-form" autocomplete="off" enctype="multipart/form-data" >
                                        {{-- @method('patch') --}}
                                        {{-- {{method_field('Post')}} --}}
                                        @csrf
                                        <input type="hidden" name="id" id="edit_id">
                                            <div class="child-image mb-3 text-center">
                                                <label class="upload-child-image">
                                                    <img id="profile-img" src="" />
                                                    <br /><br />
                                                    <input name="courseImg" id="edit_img" type="file"/>
                                                    {{-- <input id="img-upload" type="file" name="image" onchange="updateProfileImage()"/> --}}
                                                </label>
                                            </div>
                                            {{-- file --}}

                                            <div class="form-group">
                                                <label for="TitleAr">Title In Arabic</label>
                                                <input name="TitleAr" type="text" class="form-control" id="edit_title_ar">
                                            </div>

                                            <div class="form-group">
                                                <label for="TitleEn">Title In English</label>
                                                <input name="TitleEn" type="text" class="form-control" id="edit_title_en" placeholder="Enter Title In English">
                                            </div>

                                            <div class="form-group">
                                                <label for="DescAr">Description In Arabic</label>
                                                <textarea name="DescAr" class="form-control" id="edit_desc_ar" placeholder="Enter Description In Arabic" rows="3"></textarea>
                                                {{-- <input name="DescAr" type="text" class="form-control" id="DescAr" placeholder="Enter Description In Arabic"> --}}
                                            </div>

                                            <div class="form-group">
                                                <label for="DescEn">Description In English</label>
                                                <textarea name="DescEn" class="form-control" id="edit_desc_en" placeholder="Enter Description In English" rows="3"></textarea>
                                                {{-- <input name="DescEn" type="text" class="form-control" id="DescEn" placeholder="Enter Description In English"> --}}
                                            </div>

                                            <div class="form-group">
                                                <label for="type">Type Of Course</label>
                                                <select name="type" id="edit_type" class="form-control">
                                                    <option value="ar">Arabic</option>
                                                    <option value="en">English</option>
                                                </select>
                                            </div>

                                    </form>
                            </div>
                        </div>
					</div>
					<div class="modal-footer">
						<button class="btn ripple btn-success" type="submit"
                        href="/editcourse" onclick="event.preventDefault(); document.getElementById('edit-form').submit();">
                        Update Course</button>
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
						<h6 class="modal-title">Delete Course</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
					</div>
					<div class="modal-body" style="direction: ltr">
                        <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
                                <div class="card-body pt-2">
                                    <form method="POST" action="/deletecourse" id="delete-form" autocomplete="off" enctype="multipart/form-data" >
                                        {{-- @method('patch') --}}
                                        {{-- {{method_field('Post')}} --}}
                                        @csrf
                                        <input type="hidden" name="id" id="delete_id">
                                            <div class="child-image mb-3 text-center">
                                                <label class="upload-child-image">
                                                    <img id="delete-img" src="" />
                                                    <br /><br />
                                                    {{-- <input hidden name="courseImg" id="delete_img" type="file"/> --}}
                                                    {{-- <input disabled id="img-upload" type="file" name="image" onchange="updateProfileImage()"/> --}}
                                                </label>
                                            </div>
                                            {{-- file --}}

                                            <p class="lead text-center text-danger">
                                                Are you sure you want to delete this course?
                                            </p>
                                            <br />
                                            <br />
                                            <div class="form-group">
                                                <label for="TitleAr">Title In Arabic</label>
                                                <input disabled name="TitleAr" type="text" class="form-control" id="delete_title_ar">
                                            </div>

                                            <div class="form-group">
                                                <label for="TitleEn">Title In English</label>
                                                <input disabled name="TitleEn" type="text" class="form-control" id="delete_title_en" placeholder="Enter Title In English">
                                            </div>



                                    </form>
                            </div>
                        </div>
					</div>
					<div class="modal-footer">
						<button class="btn ripple btn-danger" type="submit"
                        href="/deletecourse" onclick="event.preventDefault(); document.getElementById('delete-form').submit();">
                        Delete Course</button>
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
        var edit_title_ar = button.data('edit_title_ar')
        var edit_title_en = button.data('edit_title_en')
        var edit_desc_ar = button.data('edit_desc_ar')
        var edit_desc_en = button.data('edit_desc_en')
        var edit_type = button.data('edit_type')
        var modal = $(this)
        modal.find('.modal-body #edit_id').val(edit_id);
        // modal.find('.modal-body #edit_img').val(edit_img);
        modal.find('.modal-body #edit_title_ar').val(edit_title_ar);
        modal.find('.modal-body #edit_title_en').val(edit_title_en);
        modal.find('.modal-body #edit_desc_ar').val(edit_desc_ar);
        modal.find('.modal-body #edit_desc_en').val(edit_desc_en);
        modal.find('.modal-body #edit_type').val(edit_type);
        // document.getElementById('profile-img').src(edit_img);
        document.getElementById('profile-img').src = edit_img;

    })
</script>
<script>
    $('#exampleModal5').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget)
        var delete_id = button.data('delete_id')
        var delete_img = button.data('delete_img')
        var delete_title_ar = button.data('delete_title_ar')
        var delete_title_en = button.data('delete_title_en')
        var delete_desc_ar = button.data('delete_desc_ar')
        var delete_desc_en = button.data('delete_desc_en')
        var delete_type = button.data('delete_type')
        var modal = $(this)
        modal.find('.modal-body #delete_id').val(delete_id);
        // modal.find('.modal-body #delete_img').val(delete_img);
        modal.find('.modal-body #delete_title_ar').val(delete_title_ar);
        modal.find('.modal-body #delete_title_en').val(delete_title_en);
        modal.find('.modal-body #delete_desc_ar').val(delete_desc_ar);
        modal.find('.modal-body #delete_desc_en').val(delete_desc_en);
        modal.find('.modal-body #delete_type').val(delete_type);
        // document.getElementById('profile-img').src(delete_img);
        document.getElementById('delete-img').src = delete_img;

    })
</script>

@endsection
