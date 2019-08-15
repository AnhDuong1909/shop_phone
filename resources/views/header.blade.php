<div id="header">

        <div class="header-body"  style="background-color:#00FFFF">
            <div class="container beta-relative">
                <div class="pull-left" >
                    <a href="index.html" id="logo"><img src="source/image/logo.png" width="300px" height="100px" alt=""></a>
                </div>
                <div class="pull-right beta-components space-left ov">
                    <div class="space10">&nbsp;</div>
                    <div class="beta-comp" >
                        <form role="search" method="get" id="searchform" action="/" style="width:300px; padding-top:10px; ">
                            <input type="text" value="" name="s" id="s" placeholder="Nhập từ khóa..." />
                            <button class="fa fa-search" type="submit" id="searchsubmit" style=" padding-top:15px;"></button>
                        </form>
                    </div>
                    <div class="beta-comp" >
                            @if(Session::has('cart '))
                            {{-- //có giỏ hàng hay không --}}
                        <div class="cart">

                            <div class="beta-select"><i class="fa fa-shopping-cart"></i> Giỏ hàng(@if(Session::has('cart')) {{Session('cart')->totalQty}}@else Trống @endif) <i class="fa fa-chevron-down"></i></div>
                            <div class="beta-dropdown cart-body">


                                @foreach($product_cart as $product)
                                <div class="cart-item">
                                    <div class="media">
                                        <a class="pull-left" href="#"><img src="source/image/dienthoai/{{$product['item']['image']}}" alt=""></a>
                                        <div class="media-body">


                                            <span class="cart-item-title">{{$product['item']['name']}}</span>

                                            <span class="cart-item-amount">{{$product['qty']}}*<span>{{$product['item']['unit_price']}}</span></span>
                                        </div>
                                    </div>
                                </div>
                                @endforeach



                                <div class="cart-caption">
                                    <div class="cart-total text-right">Tổng tiền: <span class="cart-total-value">{{Session('cart')->totalPrice}}</span></div>
                                    <div class="clearfix"></div>

                                    <div class="center">
                                        <div class="space10">&nbsp;</div>
                                        <a href="checkout.html" class="beta-btn primary text-center">Đặt hàng <i class="fa fa-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>

                        </div> <!-- .cart -->

                        @endif
                    </div>
                </div>
                <div class="clearfix"></div>
            </div> <!-- .container -->
        </div> <!-- .header-body -->
        <div class="header-bottom" style="background-color:#82FA58;">
            <div class="container" style="width:1300px;">
                <a class="visible-xs beta-menu-toggle pull-right" href="#" ><span class='beta-menu-toggle-text'>Menu</span> <i class="fa fa-bars"></i></a>
                <div class="visible-xs clearfix"></div>
                <nav class="main-menu" >
                    <ul class="l-inline ov">
                    <li style="width:150px; "><a href="{{route('trangchu')}}" >Trang chủ</a></li>
                    <li style="width:150px;"><a href="#">Sản phẩm</a>
                            <ul class="sub-menu">
                                @foreach($loai_sp as $loai)
                            <li><a href="{{route('loaisanpham',$loai->id)}}">{{$loai->name}}</a></li>
                                  @endforeach
                            </ul>
                    </li>
                    <li style="width:150px;"><a href="{{route('gioithieu')}}">Giới thiệu</a></li>
                    <li style="width:150px;"><a href="{{route('lienhe')}}">Liên hệ</a></li>
                    <li style="width:150px;"><a href="{{route('dangki')}}">Đăng kí</a></li>
                    <li style="width:150px;"><a href="{{route('dangnhap')}}">Đăng nhập</a></li>
                    <li style="width:150px;"><a href="#">Giỏ hàng</a></li>

                    </ul>
                    <div class="clearfix"></div>
                </nav>
            </div> <!-- .container -->
        </div> <!-- .header-bottom -->
    </div> <!-- #header -->
