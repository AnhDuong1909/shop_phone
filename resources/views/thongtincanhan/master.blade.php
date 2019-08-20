
@extends('master')
@section('content')
<div class="container">
    <div id="content" class="space-top-none">
        <div class="main-content">

            <div class="space60">&nbsp;</div>
            <div class="row">
                <div class="col-sm-2">
                    <ul class="list-group">
                        <li class="list-group-item"><a href="{{ route('thongtincanhan.index') }}">Thông tin cá nhân</a></li>
                        <li class="list-group-item"><a href="{{ route('thongtincanhan._edit') }}">Cập nhật thông tin</a></li>
                        <li class="list-group-item"><a href="{{ route('thongtincanhan.index') }}">Danh sách đơn hàng</a></li>
                        <li class="list-group-item"><a href="{{ route('thongtincanhan.index') }}">#</a></li>
                        <li class="list-group-item"><a href="{{ route('thongtincanhan.index') }}">#</a></li>
                        <li class="list-group-item"><a href="{{ route('thongtincanhan.index') }}">#</a></li>
                        <li class="list-group-item"><a href="{{ route('thongtincanhan.index') }}">#</a></li>
                    </ul>
                </div>
                <div class="col-sm-9">
                    @section('contentInfo')

                    @show
                </div>
            </div>


        </div> <!-- .main-content -->
    </div> <!-- #content -->
</div> <!-- .container -->
@endsection

