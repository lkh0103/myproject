@extends("buoi08.master")
@section("noidung")
	<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Đăng kí</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb">
					<a href="{{route('trangchu')}}">Trang Chủ</a> / <span>Đăng kí</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	
	<div class="container">
		<div id="content">
			
			<form action="{{route('dangky')}}" method="post" class="beta-form-checkout">

				{{csrf_field()}}

				<div class="row">
					<div class="col-sm-3"></div>

<!--					@if(count($errors)>0)
						<div class="alert alert-danger">
							@foreach($errors->all() as $err)
								{{$err}}
							@endforeach
						</div>
					@endif
-->
					@if(Session::has('thanhcong'))
						<div class="alert alert-success">{{Session::get('thanhcong')}}</div>
					@endif
				
					<div class="col-sm-6">
						<h4>Đăng kí</h4>
						<div class="space20">&nbsp;</div>

						
						<div class="form-block">
							<label for="email">Email address*</label>
							<input type="email" id="email" name="email" required>
							@if($errors->has('email'))
							<label class="alert alert-danger">
								{{$errors->first('email')}}
							</label>
							@endif
						</div>

						<div class="form-block">
							<label for="your_last_name">Fullname*</label>
							<input type="text" id="your_last_name" name="fullname" required>
							@if($errors->has('fullname'))
							<label class="alert alert-danger">
								{{$errors->first('fullname')}}
							</label>
							@endif
						</div>

						<div class="form-block">
							<label for="adress">Address*</label>
							<input type="text" id="address" name="address" value="Street Address" required>
							@if($errors->has('address'))
							<label class="alert alert-danger">
								{{$errors->first('address')}}
							</label>
							@endif
						</div>

						<div class="form-block">
							<label for="phone">Phone*</label>
							<input type="text" id="phone" name="phone" required>
							@if($errors->has('phone'))
							<label class="alert alert-danger">
								{{$errors->first('phone')}}
							</label>
							@endif
						</div>

						<div class="form-block">
							<label for="phone">Password*</label>
							<input type="password" id="phone" name="password"  required>
							@if($errors->has('password'))
							<label class="alert alert-danger">
								{{$errors->first('password')}}
							</label>
							@endif
						</div>

						<div class="form-block">
							<label for="phone">Re password*</label>
							<input type="password" id="phone" name="re_password" required>
							@if($errors->has('re_password'))
							<label class="alert alert-danger">
								{{$errors->first('re_password')}}
							</label>
							@endif
						</div>

						<div class="form-block">
							<button type="submit" class="btn btn-primary">Register</button>
						</div>

					</div>
					<div class="col-sm-3"></div>
				</div>
			</form>
		</div> <!-- #content -->
	</div> <!-- .container -->
@endsection