@extends('master')
@section('content')
<div class="inner-header">
    <div class="container">
        <div class="pull-left">
            <h6 class="inner-title">Đăng kí</h6>
        </div>
        <div class="pull-right">
            <div class="beta-breadcrumb">
                <a href="{{route('trangchu')}}">Home</a> / <span>Đăng kí</span>
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
                    <strong><p style="color:red; font-size:30px;">Đăng kí</p></strong>
                    <div class="space20">&nbsp;</div>


                    <div class="form-block" style="margin-top:50px;">
                        <label for="email" style="font-size:18px; color:#FF0000;">Email address</label>
                        <input type="email" id="email" required style="border: 1px solid #04B4AE;">
                    </div>

                    <div class="form-block">
                        <label for="your_last_name"style="font-size:18px; color:#FF0000; ">Fullname</label>
                        <input type="text" id="your_last_name" required style="border: 1px solid #04B4AE;">
                    </div>

                    <div class="form-block">
                        <label for="adress"style="font-size:18px; color:#FF0000; ">Address</label>
                        <input type="text" id="adress"  required style="border: 1px solid #04B4AE;">
                    </div>


                    <div class="form-block">
                        <label for="phone"style="font-size:18px; color:#FF0000; ">Phone</label>
                        <input type="text" id="phone" required style="border: 1px solid #04B4AE;">
                    </div>
                    <div class="form-block">
                        <label for="phone"style="font-size:18px; color:#FF0000; ">Password</label>
                        <input type="text" id="phone" required style="border: 1px solid #04B4AE;">
                    </div>
                    <div class="form-block">
                        <label for="phone"style="font-size:18px; color:#FF0000; ">Re password</label>
                        <input type="text" id="phone" required style="border: 1px solid #04B4AE;">
                    </div>
                    <div class="form-block">
                        <button type="submit" class="btn btn-primary" style="width:100px; background-color: #01DFD7; ">Register</button>
                    </div>
                </div>
                <div class="col-sm-3"></div>
            </div>
        </form>
    </div> <!-- #content -->
</div> <!-- .container -->
@endsection
