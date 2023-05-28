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
							<h4 class="content-title mb-0 my-auto">Settings </h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Toddler Questions</span>
						</div>
					</div>

				</div>
				<!-- breadcrumb -->
@endsection
@section('content')
				<!-- row -->
                <?php
                    $json = file_get_contents('site_settings/QA.json');
                    $data = json_decode($json, true);
                ?>
                    @if (Session::has('success'))
                    <div class="col-md-3 text-center alert alert-success d-flex align-items-center" role="alert" style="direction: ltr">
                        <i class="fa-solid fa-triangle-exclamation"></i>
                        <div> {{ Session::get('success') }} </div>
                    </div>
                    @endif
				<div class="row row-sm" >
                    <div class="col-lg-6 col-xl-6 col-md-12 col-sm-12 text-left" style="direction: ltr">
						<div class="card  box-shadow-0">
							<div class="card-header">
								<h4 class="card-title mb-1">Toddlers Questions Model English</h4>
							</div>
							<div class="card-body pt-0">
								<form class="form-horizontal" method="PosT" action="/updateQuToddleren">
                                    @csrf
									<div class="form-group">
                                        <label class="text-danger" for="en_q0">Question One </label>
										<input name="q0" value="{{ $data['question_toddler_en'][0] }}" type="text" class="form-control" id="en_q0" placeholder="Enter Question One">
									</div>
                                    <div class="form-group">
                                        <label class="text-danger" for="en_q1">Question Two </label>
                                        <input name="q1" value="{{ $data['question_toddler_en'][1] }}" type="text" class="form-control" id="en_q1" placeholder="Enter Question Two">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-danger" for="en_q2">Question Three </label>
                                        <input name="q2" value="{{ $data['question_toddler_en'][2] }}" type="text" class="form-control" id="en_q2" placeholder="Enter Question Three">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-danger" for="en_q3">Question Four </label>
                                        <input name="q3" value="{{ $data['question_toddler_en'][3] }}" type="text" class="form-control" id="en_q3" placeholder="Enter Question Four">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-danger" for="en_q4">Question Five </label>
                                        <input name="q4" value="{{ $data['question_toddler_en'][4] }}" type="text" class="form-control" id="en_q4" placeholder="Enter Question Five">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-danger" for="en_q5">Question Six </label>
                                        <input name="q5" value="{{ $data['question_toddler_en'][5] }}" type="text" class="form-control" id="en_q5" placeholder="Enter Question Six">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-danger" for="en_q6">Question Seven </label>
                                        <input name="q6" value="{{ $data['question_toddler_en'][6] }}" type="text" class="form-control" id="en_q6" placeholder="Enter Question Seven">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-danger" for="en_q7">Question Eight </label>
                                        <input name="q7" value="{{ $data['question_toddler_en'][7] }}" type="text" class="form-control" id="en_q7" placeholder="Enter Question Eight">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-danger" for="en_q8">Question Nine </label>
                                        <input name="q8" value="{{ $data['question_toddler_en'][8] }}" type="text" class="form-control" id="en_q8" placeholder="Enter Question Nine">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-danger" for="en_q9">Question Ten </label>
                                        <input name="q9" value="{{ $data['question_toddler_en'][9] }}" type="text" class="form-control" id="en_q9" placeholder="Enter Question Ten">
                                    </div>
									<div class="form-group mb-0 mt-3 justify-content-end">
										<div>
											<button type="submit" class="btn btn-success">Update</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
                    <div class="col-lg-6 col-xl-6 col-md-12 col-sm-12 text-left" style="direction: rtl">
                        <div class="card  box-shadow-0">
                            <div class="card-header">
                                <h4 class="card-title mb-1">Toddlers Questions Model Arabic</h4>
                            </div>
                            <div class="card-body pt-0">
                                <form class="form-horizontal" method="PosT" action="/updateQuToddlerar">
                                    @csrf
                                    <div class="form-group">
                                        <label class="text-danger" for="ar_q0">Question One </label>
                                        <input name="q0" value="{{ $data['question_toddler_ar'][0] }}" type="text" class="form-control" id="ar_q0" placeholder="Enter Question One">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-danger" for="ar_q1">Question Two </label>
                                        <input name="q1" value="{{ $data['question_toddler_ar'][1] }}" type="text" class="form-control" id="ar_q1" placeholder="Enter Question Two">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-danger" for="ar_q2">Question Three </label>
                                        <input name="q2" value="{{ $data['question_toddler_ar'][2] }}" type="text" class="form-control" id="ar_q2" placeholder="Enter Question Three">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-danger" for="ar_q3">Question Four </label>
                                        <input name="q3" value="{{ $data['question_toddler_ar'][3] }}" type="text" class="form-control" id="ar_q3" placeholder="Enter Question Four">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-danger" for="ar_q4">Question Five </label>
                                        <input name="q4" value="{{ $data['question_toddler_ar'][4] }}" type="text" class="form-control" id="ar_q4" placeholder="Enter Question Five">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-danger" for="ar_q5">Question Six </label>
                                        <input name="q5" value="{{ $data['question_toddler_ar'][5] }}" type="text" class="form-control" id="ar_q5" placeholder="Enter Question Six">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-danger" for="ar_q6">Question Seven </label>
                                        <input name="q6" value="{{ $data['question_toddler_ar'][6] }}" type="text" class="form-control" id="ar_q6" placeholder="Enter Question Seven">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-danger" for="ar_q7">Question Eight </label>
                                        <input name="q7" value="{{ $data['question_toddler_ar'][7] }}" type="text" class="form-control" id="ar_q7" placeholder="Enter Question Eight">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-danger" for="ar_q8">Question Nine </label>
                                        <input name="q8" value="{{ $data['question_toddler_ar'][8] }}" type="text" class="form-control" id="ar_q8" placeholder="Enter Question Nine">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-danger" for="ar_q9">Question Ten </label>
                                        <input name="q9" value="{{ $data['question_toddler_ar'][9] }}" type="text" class="form-control" id="ar_q9" placeholder="Enter Question Ten">
                                    </div>
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
