@extends('layouts.main')

@section('css')
<link rel="stylesheet" href="{{url('public/css')}}/jquery.tabs.css">
@endsection
@section('main')

<div class="container" style="margin-top: 50px">
	<div class="jq-tab-wrapper" id="myTab">
		<div class="jq-tab-menu">
			<div class="jq-tab-title active" data-tab="1">Thông tin tài khoản</div>
			<div class="jq-tab-title" data-tab="2">Lịch sử Booking</div>
			<div class="jq-tab-title" data-tab="3">Đổi mật khẩu</div>
		</div>
		<div class="jq-tab-content-wrapper">
			<div class="jq-tab-content active" data-tab="1">
				<h3>Thông tin tài khoản</h3>
				@if(!Auth::guard('cus')->user()->image)
				<img src="{{url('public/images/')}}/unknown-avatar.png" class="customer-avatar" alt="">
				@else
				<img src="{{url('public/images/customers')}}/{{Auth::guard('cus')->user()->image}}" class="customer-avatar" alt="">
				@endif
				<p>Họ và Tên: <span>{{Auth::guard('cus')->user()->l_name}} {{Auth::guard('cus')->user()->f_name}}</span></p>
				<p>Ngày Sinh: <span>{{date('d/m/Y',strtotime(Auth::guard('cus')->user()->birthday))}}</span></p>
				<p>Số điện thoại: <span>{{Auth::guard('cus')->user()->phone}}</span></p>
				<p>Địa chỉ: <span>{{Auth::guard('cus')->user()->address}}</span></p>
				<a data-toggle="modal" href='#modal-id' class="btn btn-2">Thay đổi thông tin</a>
			</div>
			<div class="jq-tab-content" data-tab="2">
				<h3>Lịch sử Booking</h3>
				<div class="table-hover">
					<table class="table table-hover">
						<thead>
							<tr>
								<th>Tên Tour</th>
								<th>Ngày Đi</th>
								<th>Ngày Về</th>
								<th>Thời Gian</th>
								<th>Người Lớn</th>
								<th>Trẻ Em</th>
								<th>Tổng Tiền</th>
								<th>Ghi Chú</th>
								<th>Ngày Đặt Tour</th>
								<th>Trạng Thái</th>
							</tr>
						</thead>
						<tbody>
							@foreach($booking as $bk)
							<tr>
								<td>{{$bk->tours->name}}</td>
								<td>{{date('d/m/Y',strtotime($bk->start_date))}}</td>
								<td>{{date('d/m/Y',strtotime($bk->end_date))}}</td>
								<td>{{$bk->tours->duration}} Ngày</td>
								<td>{{$bk->adult_number}}</td>
								<td>{{$bk->children_number}}</td>
								<td>{{$bk->total_price}} VNĐ</td>
								<td>{{$bk->note}}</td>
								<td>{{date('d/m/Y',strtotime($bk->created_at))}}</td>
								<td>
									<span class="badge badge-{{$bk->getStatus($bk->status)['class']}}">
                                        {{$bk->getStatus($bk->status)['name']}}
                                    </span>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
			<div class="jq-tab-content" data-tab="3">
				<h3>Đổi mật khẩu</h3>
				<div class="col-md-6" style="margin-top: 20px">
					<form action="{{route('update-password')}}" method="POST" role="form">
						@csrf
						@method('PUT')
						<div class="form-group">
							<label for="">Nhập mật khẩu cũ</label>
							<input type="password" class="form-control" name="old_password" id="old_password">
							@error('old_password')
	                            <small class="help-block text-error">
	                                {{$message}}
	                            </small>
	                        @enderror
						</div>
						<div class="form-group">
							<label for="">Nhập mật khẩu mới</label>
							<input type="password" class="form-control" name="password" id="password">
							@error('new_password')
	                            <small class="help-block text-error">
	                                {{$message}}
	                            </small>
	                        @enderror
						</div>
						<div class="form-group">
							<label for="">Xác nhận mật khẩu mới</label>
							<input type="password" class="form-control" name="cpassword" id="cpassword">
							@error('cpassword')
	                            <small class="help-block text-error">
	                                {{$message}}
	                            </small>
	                        @enderror
						</div>
					
						<button type="submit" class="btn btn-2" id="change_password_btn">Lưu</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="modal fade customer-info-modal" id="modal-id">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Thay đổi thông tin</h4>
			</div>

			<form action="{{route('update-info')}}" method="POST" enctype="multipart/form-data">
				@csrf
				@method('PUT')
				<div class="modal-body">
					<div class="form-group">
						<label for="">Họ</label>
						<input type="text" class="form-control" name="l_name" value="{{Auth::guard('cus')->user()->l_name}}">
					</div>
					<div class="form-group">
						<label for="">Tên</label>
						<input type="text" class="form-control" name="f_name" value="{{Auth::guard('cus')->user()->f_name}}">
					</div>
					<div class="form-group">
						<label for="">Ngày Sinh</label>
						<input type="text" class="form-control" name="birthday" id="birthday" value="{{Auth::guard('cus')->user()->birthday}}">
					</div>
					<div class="form-group">
						<label for="">Số điện thoại</label>
						<input type="text" class="form-control" name="phone" value="{{Auth::guard('cus')->user()->phone}}">
					</div>
					<div class="form-group">
						<label for="">Địa chỉ</label>
						<input type="text" class="form-control" name="address" value="{{Auth::guard('cus')->user()->address}}">
					</div>
					<div class="form-group">
						<label for="">Hình đại diện</label>
						<input type="file" name="upload">
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
					<button type="submit" class="btn btn-primary">Lưu Thay Đổi</button>
				</div>
			</form>
			
		</div>
	</div>
</div>
@endsection
@section('js')
<script src="{{url('public/js')}}/jquery.tabs.min.js" type="text/javascript"></script>
<script type="text/javascript">
	$('#myTab').jqTabs({
		tabClicked: $.noop,
 		tabContentLoaded: $.noop
	});
	$('#birthday').Zebra_DatePicker({
		readonly_element: false,
		directive: -1
	});
</script>
@stop
