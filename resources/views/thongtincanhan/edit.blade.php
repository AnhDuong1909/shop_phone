@if (Auth::user() !== null)

        @extends('thongtincanhan.master')
        @section('contentInfo')
        <div style="display:block;height:250px;">
        <form  class="update_form" action="{{ route('thongtincanhan.update',Auth::user()->id) }}" method="post">
                @csrf
                <input type="hidden" name="_method" value="PATCH">

            <div class="row"  style=" font-size: larger;">
                <div class="col-sm-2">Họ tên</div>
                <div class="col-sm-7">
                    <input type="text"  class="form-control " name="name" value="{{ Auth::user()->name }}">
                </div>
            </div>
            <div class="row"  style=" margin-top: 10px; font-size: larger;">
                <div class="col-sm-2">Email  </div>
                <div class="col-sm-7">
                    <input type="email"  class="form-control" name="email" value="{{ Auth::user()->email }}" readonly>
                </div>
            </div>
            <div class="row"  style=" margin-top: 10px; font-size: larger;">
                <div class="col-sm-2">Số điện thoại  </div>
                <div class="col-sm-7">
                    <input type="number"  class="form-control " name="phone" value="{{ Auth::user()->phone }}">
                </div>
            </div>
            <div class="row"  style=" margin-top: 10px; font-size: larger;">
                <div class="col-sm-2">Địa chỉ  </div>
                <div class="col-sm-7">
                    <input type="text"  class="form-control " name="address" value="{{ Auth::user()->address }}">
                </div>
            </div>
            <div class="row"  style=" margin-top: 10px; font-size: larger;">
                <div class="col-sm-2">Giới tính  </div>
                <div class="col-sm-7">
                        <div class="input-wrap">
                                <div class="row">
                                    <div class="col-xs-4">
                                        <span>
                                            <input type="radio" name="gender" value="nam"
                                            @if (Auth::user()->gender == 'nam')    {{ 'checked' }}   @endif />
                                            Nam
                                        </span>
                                    </div>
                                    <div class="col-xs-4">
                                        <span>
                                            <input type="radio" name="gender" value="nữ"
                                            @if (Auth::user()->gender == 'nữ')    {{ 'checked' }}   @endif>
                                            Nữ
                                        </span>
                                    </div>
                                </div>

                            </div>
                    {{-- <input type="text"  class="form-control " name="phone" value="{{ Auth::user()->gender }}">    --}}
                </div>
            </div>
            <div class="row"  style=" margin-top: 10px; font-size: larger;">
                <div class="col-sm-2">Ngày sinh</div>
                <div class="col-sm-7">
                    <input type="date"  class="form-control " name="dob" value="{{ Auth::user()->dob }}">
                </div>
            </div>
            <div class="row"  style=" margin-top: 10px">
                <div class="col-sm-2"></div>
                <div class="col-sm-7">
                    <button type="submit" class="btn btn-primary">Cập nhật</button>
                </div>
            </div>
        </form>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script>
            $(document).ready(function () {
                $('.update_form').on('submit',function(){
                    if(confirm('Thông báo: cập nhật mơi ! ')){
                        return true;
                    }else {
                        return false;
                    }
                });
            });
        </script>
        @endsection


@else
<script>window.location = "http://localhost:8080/shop_phone/public/index";</script>
@endif
