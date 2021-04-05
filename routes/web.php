<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Buoi 08,09,10
Route::get("index", "App\Http\Controllers\webbanhang@getindex")->name("trangchu");

Route::get("loaisanpham/{type}", "App\Http\Controllers\webbanhang@getloai_sanpham")->name("loaisanpham");

Route::get("loai-san-pham", "App\Http\Controllers\webbanhang@getloaisanpham")->name("loai_san_pham");

Route::get("chi-tiet/{id}", "App\Http\Controllers\webbanhang@getchitiet")->name("chitiet");

Route::get("gioi-thieu", "App\Http\Controllers\webbanhang@getgioithieu")->name("gioithieu");

Route::get("lien-he", "App\Http\Controllers\webbanhang@getlienhe")->name("lienhe");

Route::get("add-to-cart/{id}", "App\Http\Controllers\webbanhang@getaddtocart")->name("themgiohang");

Route::get("del-to-cart/{id}", "App\Http\Controllers\webbanhang@getdeltocart")->name("xoagiohang");

Route::get("dat-hang", "App\Http\Controllers\webbanhang@getdathang")->name("dathang");

Route::post("dat-hang", "App\Http\Controllers\webbanhang@postdathang")->name("dathang");

Route::get("dang-nhap", "App\Http\Controllers\webbanhang@getdangnhap")->name("dangnhap");

Route::post("dang-nhap", "App\Http\Controllers\webbanhang@postdangnhap")->name("dangnhap");

Route::get("dang-ky", "App\Http\Controllers\webbanhang@getdangky")->name("dangky");

Route::post("dang-ky", "App\Http\Controllers\webbanhang@postdangky")->name("dangky");

Route::get("dang-xuat", 'App\Http\Controllers\webbanhang@postdangxuat')->name("dangxuat");

Route::get("tim-kiem", "App\Http\Controllers\webbanhang@gettimkiem")->name("timkiem");

Route::post('themsoluong',"App\Http\Controllers\webbanhang@postsoluongsanpham")->name("soluongsanpham");

Route::get("admin/loai-san-pham","App\Http\Controllers\webbanhang@getphanloai")->name("phanloai");

//Trang quản trị
Route::get("admin/danh-sach-loai-sp", "App\Http\Controllers\admincontroller@getdanhsachloaisp")->name("danhsachloaisp");

Route::get("admin/them-loai-sp", "App\Http\Controllers\admincontroller@getthemloaisanpham")->name("them-loai-sp");

Route::post("admin/themloaisp", "App\Http\Controllers\admincontroller@posthemloaisanpham")->name("themmoisp");

//Buoi01
Route::get('/', function() {
    return view('welcome');
});

Route::get('/chao', function() {
	return "Laravel kinh chao cac ban";
});


//Buoi 01 vs 02
Route::get('/thoquehuong', function(){
	return view("buoi01.tho");
});

Route::get('/abc', function(){
	return view("buoi01.vanban");
});

Route::get('/bt1', function(){
	return view("buoi01.bt1");
});

Route::get('/bt2', function(){
	return view("buoi01.bt2");
});

Route::get('/buoi02', function(){
	return view("buoi02.Bai01");
});

Route::get('/shophoatuoi', function(){
	return view("buoi02.Bai02");
});

Route::get('/excitehome', function(){
	return view("buoi02.Bai03");
});


//Buoi 03
Route::get('/giaodien', function(){
	return view("buoi03.giaodien");
});


//Buoi 04
//Route::get('ptb1/{a?}/{b?}','App\Http\Controllers\Baitap@ptb1');
//Route::get("hinhchunhat","App\Http\Controllers\Baitap@hinhchunhat"); 
//oute::post("hinhchunhat", "App\Http\Controllers\Baitap@xulyhcn");



//Buoi 05
//Route::get('/master', 'App\Http\Controllers\Baitap@master');
//Route::get('/layout', 'App\Http\Controllers\Baitap@layout');
//Route::get('/thanhgiong', 'App\Http\Controllers\Baitap@thanhgiong');
//Route::get('/thachsanh', 'App\Http\Controllers\Baitap@thachsanh');
//Route::get('/trikhon', 'App\Http\Controllers\Baitap@trikhon');



//Buoi 06
Route::get('lienket', function(){
	$data = App\Models\sanpham::find(2)->loaisp->toArray();
	var_dump($data);
});

Route::get('lienketloaisp',function(){
	$data = App\Models\loaisp::find(1)->sanpham->toArray();
	var_dump($data);
});
Route::get('lietkedskh', 'querybuiler@lietkedskh');