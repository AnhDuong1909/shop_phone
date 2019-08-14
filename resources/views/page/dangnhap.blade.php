@extends('master')
@section('content')
<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Đăng nhập</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb">
					<a href="{{route('trangchu')}}">Home</a> / <span>Đăng nhập</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>

	<div class="container">
		<div id="content">

			<form action="#" method="post" class="beta-form-checkout">
				<div class="row">
					<div class="col-sm-3"></div>
					<div class="col-sm-6">
						<h4 style="color:red">Đăng nhập</h4>
						<div class="space20">&nbsp;</div>


						<div class="form-block">
							<label for="email" style="font-size:18px; color:#FF0000; ">Email address</label>
							<input type="email" id="email" required style="border: 1px solid #04B4AE;">
						</div>
						<div class="form-block">
							<label for="phone" style="font-size:18px; color:#FF0000; ">Password</label>
							<input type="text" id="phone" required style="border: 1px solid #04B4AE;">
						</div>
						<div class="form-block">
							<button type="submit" class="btn btn-primary" style="width:100px; background-color: #01DFD7; ">Login</button>
						</div>
					</div>
					<div class="col-sm-3"></div>
				</div>
			</form>
		</div> <!-- #content -->
    </div> <!-- .container -->
    @endsection
