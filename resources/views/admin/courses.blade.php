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
@endsection
