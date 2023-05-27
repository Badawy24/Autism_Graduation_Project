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
							<h4 class="content-title mb-0 my-auto">Dashboard</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Messages</span>
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
									<h4 class="card-title mg-b-0">Messages Table</h4>
									<i class="mdi mdi-dots-horizontal text-gray"></i>
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
												<th class="border-bottom-0">Sender Name</th>
												<th class="border-bottom-0">Email</th>
												<th class="border-bottom-0">Subject</th>
												<th class="border-bottom-0">Message</th>
												<th class="border-bottom-0">Admin</th>
											</tr>
										</thead>
										<tbody>
                                            <?php $i = 0?>
                                            @foreach ($messages as $message )
                                            <tr>
												<td>{{ ++$i }}</td>
												<td>{{ $message->name }}</td>
												<td>{{ $message->email }}</td>
												<td>{{ $message->subject }}</td>
												<td>
                                                    @if($message->replay == null)
                                                    <a class="modal-effect btn btn-md btn-success" data-effect="effect-scale"
                                                        data-msg_id = "{{ $message->id }}"
                                                        data-msg_name= "{{ $message->name }}"
                                                        data-msg_subject= "{{ $message->subject }}"
                                                        data-msg_email= "{{ $message->email }}"
                                                        data-msg_message= "{{ $message->message }}"
                                                        data-msg_replay= "{{ $message->replay }}"
                                                        data-msg_adminId= "{{ $message->adminId }}"
                                                        data-msg_created_at= "{{ $message->created_at }}"
                                                        data-msg_updated_at= "{{ $message->updated_at }}"
                                                        data-toggle="modal"
                                                        href="#exampleModal4"
                                                        title="Message">
                                                        <i class="las la-pen"></i>
                                                    </a>
                                                    @else
                                                    <a class="modal-effect btn btn-md btn-secondary" data-effect="effect-scale"
                                                        data-msg_id = "{{ $message->id }}"
                                                        data-msg_name= "{{ $message->name }}"
                                                        data-msg_subject= "{{ $message->subject }}"
                                                        data-msg_email= "{{ $message->email }}"
                                                        data-msg_message= "{{ $message->message }}"
                                                        data-msg_replay= "{{ $message->replay }}"
                                                        data-msg_adminId= "{{ $message->adminId }}"
                                                        data-msg_created_at= "{{ $message->created_at }}"
                                                        data-msg_updated_at= "{{ $message->updated_at }}"
                                                        data-toggle="modal"
                                                        href="#exampleModal5"
                                                        title="Message">
                                                        <i class="las la-pen"></i>
                                                    </a>
                                                    @endif

                                                </td>

												<td>{{ $message->firstName }} {{ $message->firstName }}</td>
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
        {{-- Replay --}}
        <div class="modal" id="exampleModal4">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content modal-content-demo">
					<div class="modal-header">
						<h6 class="modal-title">Replay Message</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
					</div>
					<div class="modal-body" style="direction: ltr">
                        <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
                                <div class="card-body pt-2">
                                    <form method="POST" action="/replaymsg" id="replay-form" autocomplete="off" enctype="multipart/form-data" >
                                        {{-- @method('patch') --}}
                                        {{-- {{method_field('Post')}} --}}
                                        @csrf
                                        <input type="hidden" name="id" id="msg_id">
                                        <input type="hidden" name="msg_subject" id="msg_subject">
                                        <input type="hidden" name="user_email" id="msg_email">

                                            <div class="form-group">
                                                <label for="msg_subject">Subject</label>
                                                <input disabled name="msg_subject" type="text" class="form-control" id="msg_subject">
                                                <p id="msg_created_at" class="text-danger"></p>
                                            </div>

                                            <div class="form-group">
                                                <label for="msg_message">Message Content</label>
                                                <textarea disabled name="msg_message" class="form-control" id="msg_message" rows="10"></textarea>
                                            </div>

                                            <div class="form-group">
                                                <label for="msg_replay">Replay</label>
                                                <textarea required name="msg_replay" class="form-control" id="msg_replay" placeholder="Enter Replay" rows="10"></textarea>
                                            </div>

                                    </form>
                            </div>
                        </div>
					</div>
					<div class="modal-footer">
						<button class="btn ripple btn-success" type="submit"
                        href="/replaymsg" onclick="event.preventDefault(); document.getElementById('replay-form').submit();">
                        Replay</button>
						<button class="btn ripple btn-secondary" data-dismiss="modal" type="button">Close</button>
					</div>
				</div>
			</div>
		</div>
        {{-- View --}}
        <div class="modal" id="exampleModal5">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content modal-content-demo">
					<div class="modal-header">
						<h6 class="modal-title">View Message</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
					</div>
					<div class="modal-body" style="direction: ltr">
                        <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
                            <div class="card-body pt-2">
                                <div class="form-group">
                                    <div class="card text-left p-1">
                                        <p class="lead text-danger">Subject:</p>
                                        <br/>
                                        <p class="lead mb-2" id="msg_subject"></p>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="card text-left p-1">
                                        <p class="lead text-danger">Message Content:</p>
                                        <br/>
                                        <p class="lead mb-2" id="msg_message"></p>
                                        <p id="msg_created_at" class="text-danger"></p>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="card text-left p-1">
                                        <p class="lead text-danger">Replay:</p>
                                        <br/>
                                        <p class="lead mb-2" id="msg_replay"></p>
                                        <p id="msg_updated_at" class="text-danger"></p>
                                    </div>
                                </div>

                            </div>
                        </div>
					</div>
					<div class="modal-footer">
						<button class="btn ripple btn-secondary" data-dismiss="modal" type="button">Close</button>
					</div>
				</div>
			</div>
		</div>

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
        var msg_id = button.data('msg_id')
        var msg_name = button.data('msg_name')
        var msg_subject = button.data('msg_subject')
        var msg_email = button.data('msg_email')
        var msg_message = button.data('msg_message')
        var msg_replay = button.data('msg_replay')
        var msg_adminId = button.data('msg_adminId')
        var msg_created_at = button.data('msg_created_at')
        var msg_updated_at = button.data('msg_updated_at')
        var modal = $(this)
        modal.find('.modal-body #msg_id').val(msg_id);
        modal.find('.modal-body #msg_name').val(msg_name);
        modal.find('.modal-body #msg_subject').val(msg_subject);
        modal.find('.modal-body #msg_email').val(msg_email);
        modal.find('.modal-body #msg_message').val(msg_message);
        modal.find('.modal-body #msg_replay').val(msg_replay);
        modal.find('.modal-body #msg_adminId').val(msg_adminId);
        modal.find('.modal-body #msg_created_at').text(msg_created_at);
        modal.find('.modal-body #msg_updated_at').val(msg_updated_at);

    })
</script>
<script>
    $('#exampleModal5').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget)
        var msg_id = button.data('msg_id')
        var msg_name = button.data('msg_name')
        var msg_subject = button.data('msg_subject')
        var msg_email = button.data('msg_email')
        var msg_message = button.data('msg_message')
        var msg_replay = button.data('msg_replay')
        var msg_adminId = button.data('msg_adminId')
        var msg_created_at = button.data('msg_created_at')
        var msg_updated_at = button.data('msg_updated_at')
        var modal = $(this)
        modal.find('.modal-body #msg_id').text(msg_id);
        modal.find('.modal-body #msg_name').text(msg_name);
        modal.find('.modal-body #msg_subject').text(msg_subject);
        modal.find('.modal-body #msg_email').text(msg_email);
        modal.find('.modal-body #msg_message').text(msg_message);
        modal.find('.modal-body #msg_replay').text(msg_replay);
        modal.find('.modal-body #msg_adminId').text(msg_adminId);
        modal.find('.modal-body #msg_created_at').text(msg_created_at);
        modal.find('.modal-body #msg_updated_at').text(msg_updated_at);

    })
</script>

@endsection
