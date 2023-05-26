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
							<h4 class="content-title mb-0 my-auto">Courses</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ videos</span>
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
									<h4 class="card-title mg-b-0">videos Table</h4>
									<i class="mdi mdi-dots-horizontal text-gray"></i>
								</div>

                                <div class="card-body">
                                    <a class="btn ripple btn-primary" data-target="#modaldemo8" data-toggle="modal" href="">Add videos</a>
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
												<th class="border-bottom-0">Course Name Arabic</th>
												<th class="border-bottom-0">Course Name English</th>
												<th class="border-bottom-0">Video Title Arabic</th>
												<th class="border-bottom-0">Video Title English</th>
												<th class="border-bottom-0">Video Url</th>
												<th class="border-bottom-0">Created</th>
												<th class="border-bottom-0">Edit</th>
												<th class="border-bottom-0">Delete</th>
											</tr>
										</thead>
										<tbody>
                                            <?php $i = 0?>
                                            @foreach ($videos as $video )
                                            <tr>
												<td>{{ ++$i }}</td>
												<td>{{ $video->courseTitleAr }}</td>
												<td>{{ $video->courseTitleEn }}</td>
												<td>{{ $video->videoTitleAr }}</td>
												<td>{{ $video->videoTitleEn }}</td>
												<td>{{ $video->videoApi }}</td>
												<td>{{ $video->created_at }}</td>
												<td>
                                                    <a class="modal-effect btn btn-md btn-info" data-effect="effect-scale"
                                                        data-edit_id = "{{ $video->id }}"
                                                        data-edit_course_ar = "{{ $video->courseTitleAr }}"
                                                        data-edit_course_en = "{{ $video->courseTitleEn }}"
                                                        data-edit_title_ar= "{{ $video->videoTitleAr }}"
                                                        data-edit_title_en = "{{ $video->videoTitleEn }}"
                                                        data-edit_url = "{{ $video->videoApi }}"
                                                        data-toggle="modal"
                                                        href="#exampleModal4"
                                                        title="Edit">
                                                        <i class="las la-pen"></i>
                                                    </a>
                                                </td>
												<td>
                                                    <a class="modal-effect btn btn-md btn-danger" data-effect="effect-scale"
                                                        data-delete_id = "{{ $video->id }}"
                                                        data-delete_course_ar = "{{ $video->courseTitleAr }}"
                                                        data-delete_course_en = "{{ $video->courseTitleEn }}"
                                                        data-delete_title_ar= "{{ $video->videoTitleAr }}"
                                                        data-delete_title_en = "{{ $video->videoTitleEn }}"
                                                        data-delete_url = "{{ $video->videoApi }}"
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
						<h6 class="modal-title"> Add Video </h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
					</div>
					<div class="modal-body" style="direction: ltr">
                        <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
                                <div class="card-body pt-2">
                                    <form method="POST" action="/addvideo" id="video-form">
                                        @csrf
                                            {{-- file --}}
                                            <div class="form-group">
                                                {{-- <label for="TitleEn">Title In English</label> --}}
                                                <select required name="course_name" id="course_name" class="form-control">
                                                    <option selected disabled>Choose Course of Video</option>
                                                    @foreach ($courses as $course)
                                                    <option value="{{ $course->id }}">{{ $course->courseTitleAr }} - {{ $course->courseTitleEn }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

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
                                                <input required name="url" type="url" class="form-control" id="url" placeholder="Enter Video Youtube URL">
                                                {{-- <input required name="DescAr" type="text" class="form-control" id="DescAr" placeholder="Enter Description In Arabic"> --}}
                                            </div>

                                    </form>
                            </div>
                        </div>
					</div>
					<div class="modal-footer">
						<button class="btn ripple btn-primary" type="submit"
                        href="/addvideo" onclick="event.preventDefault(); document.getElementById('video-form').submit();">
                        Add Video</button>
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
						<h6 class="modal-title">Edit Video</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
					</div>
					<div class="modal-body" style="direction: ltr">
                        <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
                                <div class="card-body pt-2">
                                    <form method="POST" action="/editvideo" id="edit-form" autocomplete="off" enctype="multipart/form-data" >
                                        @csrf
                                            {{-- file --}}
                                        <input type="hidden" name="id" id="edit_id">
                                            <div class="form-group">
                                                <label for="edit_course_name">Choose Course Of Video</label>
                                                <select required name="course_name" id="edit_course_name" class="form-control">
                                                    @foreach ($courses as $course)
                                                    <option value="{{ $course->id }}">{{ $course->courseTitleAr }} - {{ $course->courseTitleEn }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="edit_TitleAr">Title Video In Arabic</label>
                                                <input required name="TitleAr" type="text" class="form-control" id="edit_TitleAr" placeholder="Enter Title In Arabic">
                                            </div>

                                            <div class="form-group">
                                                <label for="edit_TitleEn">Title video In English</label>
                                                <input required name="TitleEn" type="text" class="form-control" id="edit_TitleEn" placeholder="Enter Title In English">
                                            </div>

                                            <div class="form-group">
                                                <label for="edit_url">Youtube URL Of Video</label>
                                                <input required name="url" type="url" class="form-control" id="edit_url" placeholder="Enter Video Youtube URL">
                                            </div>

                                    </form>
                            </div>
                        </div>
					</div>
					<div class="modal-footer">
						<button class="btn ripple btn-success" type="submit"
                        href="/editvideo" onclick="event.preventDefault(); document.getElementById('edit-form').submit();">
                        Update Video</button>
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
						<h6 class="modal-title">Delete Video</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
					</div>
					<div class="modal-body" style="direction: ltr">
                        <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
                                <div class="card-body pt-2">
                                    <form method="POST" action="/deletevideo" id="delete-form" autocomplete="off" enctype="multipart/form-data" >
                                        {{-- @method('patch') --}}
                                        {{-- {{method_field('Post')}} --}}
                                        @csrf
                                        <input type="hidden" name="id" id="delete_id">

                                            <p class="lead text-center text-danger">
                                                Are you sure you want to delete this course?
                                            </p>
                                            <br />
                                            <br />
                                            <div class="form-group">
                                                <label for="delete_title_ar">Title In Arabic</label>
                                                <input disabled name="title_ar" type="text" class="form-control" id="delete_title_ar">
                                            </div>

                                            <div class="form-group">
                                                <label for="delete_title_en">Title In English</label>
                                                <input disabled name="title_en" type="text" class="form-control" id="delete_title_en" placeholder="Enter Title In English">
                                            </div>

                                    </form>
                            </div>
                        </div>
					</div>
					<div class="modal-footer">
						<button class="btn ripple btn-danger" type="submit"
                        href="/deletevideo" onclick="event.preventDefault(); document.getElementById('delete-form').submit();">
                        Delete Video</button>
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
        var edit_course_ar = button.data('edit_course_ar')
        var edit_course_en = button.data('edit_course_en')
        var edit_title_ar = button.data('edit_title_ar')
        var edit_title_en = button.data('edit_title_en')
        var edit_url = button.data('edit_url')
        var modal = $(this)
        modal.find('.modal-body #edit_id').val(edit_id);
        // modal.find('.modal-body #edit_img').val(edit_img);
        modal.find('.modal-body #edit_course_ar').val(edit_course_ar);
        modal.find('.modal-body #edit_course_en').val(edit_course_en);
        modal.find('.modal-body #edit_TitleAr').val(edit_title_ar);
        modal.find('.modal-body #edit_TitleEn').val(edit_title_en);
        modal.find('.modal-body #edit_url').val(edit_url);

    })
</script>
<script>
    $('#exampleModal5').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget)
        var delete_id = button.data('delete_id')
        var delete_title_ar = button.data('delete_title_ar')
        var delete_title_en = button.data('delete_title_en')
        var modal = $(this)
        modal.find('.modal-body #delete_id').val(delete_id);
        // modal.find('.modal-body #delete_img').val(delete_img);
        modal.find('.modal-body #delete_title_ar').val(delete_title_ar);
        modal.find('.modal-body #delete_title_en').val(delete_title_en);


    })
</script>

@endsection
