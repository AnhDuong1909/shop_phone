<?php

namespace App\Http\Controllers;

use App\Slides;
use App\Product;
class Pagecontroller extends Controller
{
    public function getIndex(){
        $slide = Slides::all();//Slides là tên lớp trong model slide

        $new_product = Product::where('new',1)->paginate(4);//phaan trang
        $sanpham_khuyenmai= Product::where('promotion_price','<>',0)->paginate(8);
        $sanpham_khuyenmai= Product::where('new',0)->paginate(8);
        //  return view('page/trangchu',['slide'=>$slide]);
        //  return view('page/trangchu',['new_product'=>$new_product]);
        return view('page/trangchu',compact('slide','new_product','sanpham_khuyenmai'));
    }
    public function getLoaiSp(){
        return view('page.loai_sanpham');
     }
     public function getChitiet(){
        return view('page.chitiet_sp');
     }
     public function getLienhe(){
        return view('page.lienhe');
     }
     public function getGioithieu(){
        return view('page.gioithieu');
     }
}
