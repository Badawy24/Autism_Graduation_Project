@extends('admin.layouts.master')
@section('css')
<!-- Internal Select2 css -->
<link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
<!--Internal  Datetimepicker-slider css -->
<link href="{{URL::asset('assets/plugins/amazeui-datetimepicker/css/amazeui.datetimepicker.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/jquery-simple-datetimepicker/jquery.simple-dtpicker.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/pickerjs/picker.min.css')}}" rel="stylesheet">
<!-- Internal Spectrum-colorpicker css -->
<link href="{{URL::asset('assets/plugins/spectrum-colorpicker/spectrum.css')}}" rel="stylesheet">
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">Settings</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Site Settings</span>
						</div>
					</div>

				</div>
				<!-- breadcrumb -->
@endsection
@section('content')
				<!-- row -->
                <?php
                    $json = file_get_contents('site_settings/head.json');
                    $data = json_decode($json, true);
                ?>
				<div class="row row-sm text-left">
					<div class="col-lg-8 col-xl-8 col-md-12 col-sm-12">
                        @if (Session::has('success'))
                        <div class="col-md-3 text-center alert alert-success d-flex align-items-center" role="alert" style="direction: ltr">
                            <i class="fa-solid fa-triangle-exclamation"></i>
                            <div> {{ Session::get('success') }} </div>
                        </div>
                        @endif
						<div class="card  box-shadow-0">
							<div class="card-header">
								<h4 class="card-title mb-1">Site Settings</h4>
							</div>
							<div class="card-body pt-0">
								<form method="POST" action="/sitesetting" class="form-horizontal" style="direction: ltr">
                                    @csrf
									<div class="form-group">
                                        <label class="lead" for="website_name_en">Website Name In English</label>
										<input name="website_name_en" type="text" class="form-control" id="website_name_en" value="{{ $data['website_name_en'] }}" placeholder="Enter Website Name In English">
									</div>
                                    <hr>
									<div class="form-group">
                                        <label class="lead" for="website_name_ar">Website Name In Arabic</label>
										<input name="website_name_ar" type="text" class="form-control" id="website_name_ar" value="{{ $data['website_name_ar'] }}" placeholder="Enter Website Name In Arabic">
									</div>
                                    <hr>
									<div class="form-group">
                                        <label class="lead" for="website_description_en">Website Description In English</label>
										<input name="website_description_en" type="text" class="form-control" id="website_description_en" value="{{ $data['website_description_en'] }}" placeholder="Enter Website Description In English">
									</div>
                                    <hr>
									<div class="form-group">
                                        <label class="lead" for="website_description_ar">Website Description In Arabic</label>
										<input name="website_description_ar" type="text" class="form-control" id="website_description_ar" value="{{ $data['website_description_ar'] }}" placeholder="Enter Website Description In Arabic">
									</div>
                                    <hr>
									<div class="form-group">
                                        <label class="lead" for="website_keywords">Website Key Words by [ , ] ex: hayah,autism,.....,......</label>
										<input name="website_keywords" type="text" class="form-control" id="website_keywords" value="{{ $data['website_keywords'] }}" placeholder="Enter Website Key Words by [ , ] ex: hayah,autism,.....,......">
									</div>
                                    <hr>
									<div class="form-group">
                                        <label class="lead" for="website_canonical">Website Link https://www........</label>
										<input name="website_canonical" type="url" class="form-control" id="website_canonical" value="{{ $data['website_canonical'] }}" placeholder="Enter Website Link https://www........">
									</div>
                                    <hr>
									<div class="form-group">
                                        <label class="lead" for="url_model_img">Model Image Link https://www........</label>
										<input name="url_model_img" type="url" class="form-control" id="url_model_img" value="{{ $data['url_model_img'] }}" placeholder="Enter Model Link https://www........">
									</div>
                                    <hr>
									<div class="form-group">
                                        <label class="lead" for="url_model_toddler">Model Toddlers Link https://www........</label>
										<input name="url_model_toddler" type="url" class="form-control" id="url_model_toddler" value="{{ $data['url_model_toddler'] }}" placeholder="Enter Model Link https://www........">
									</div>
                                    <hr>
									<div class="form-group">
                                        <label class="lead" for="url_model_child">Model Childs Link https://www........</label>
										<input name="url_model_child" type="url" class="form-control" id="url_model_child" value="{{ $data['url_model_child'] }}" placeholder="Enter Model Link https://www........">
									</div>
                                    <hr>
									<div class="form-group">
                                        <label class="lead" for="url_model_adolecent">Model Adolecents Link https://www........</label>
										<input name="url_model_adolecent" type="url" class="form-control" id="url_model_adolecent" value="{{ $data['url_model_adolecent'] }}" placeholder="Enter Model Link https://www........">
									</div>
                                    <hr>
									<div class="form-group">
                                        <label class="lead" for="url_model_adult">Model Adults Link https://www........</label>
										<input name="url_model_adult" type="url" class="form-control" id="url_model_adult" value="{{ $data['url_model_adult'] }}" placeholder="Enter Model Link https://www........">
									</div>
                                    <hr>
									<div class="form-group">
                                        <label class="lead" for="contact_phone">Website Phone</label>
										<input name="contact_phone" type="text" class="form-control" id="contact_phone" value="{{ $data['contact_phone'] }}" placeholder="Enter Website Phone">
									</div>
                                    <hr>
									<div class="form-group">
                                        <label class="lead" for="contact_email">Website Email</label>
										<input name="contact_email" type="email" class="form-control" id="contact_email" value="{{ $data['contact_email'] }}" placeholder="Enter Website Email">
									</div>
                                    <hr>
									<div class="form-group mb-0 mt-3 justify-content-end">
										<div>
											<button type="submit" class="btn btn-success">Update</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- row closed -->
			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->
@endsection
@section('js')
<!--Internal  Datepicker js -->
<script src="{{URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>
<!--Internal  jquery.maskedinput js -->
<script src="{{URL::asset('assets/plugins/jquery.maskedinput/jquery.maskedinput.js')}}"></script>
<!--Internal  spectrum-colorpicker js -->
<script src="{{URL::asset('assets/plugins/spectrum-colorpicker/spectrum.js')}}"></script>
<!-- Internal Select2.min js -->
<script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>
<!--Internal Ion.rangeSlider.min js -->
<script src="{{URL::asset('assets/plugins/ion-rangeslider/js/ion.rangeSlider.min.js')}}"></script>
<!--Internal  jquery-simple-datetimepicker js -->
<script src="{{URL::asset('assets/plugins/amazeui-datetimepicker/js/amazeui.datetimepicker.min.js')}}"></script>
<!-- Ionicons js -->
<script src="{{URL::asset('assets/plugins/jquery-simple-datetimepicker/jquery.simple-dtpicker.js')}}"></script>
<!--Internal  pickerjs js -->
<script src="{{URL::asset('assets/plugins/pickerjs/picker.min.js')}}"></script>
<!-- Internal form-elements js -->
<script src="{{URL::asset('assets/js/form-elements.js')}}"></script>
@endsection
