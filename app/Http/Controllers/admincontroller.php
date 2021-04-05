<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\type_products;

class admincontroller extends Controller
{
	public function getdanhsachloaisp()
	{
		$loaisp = type_products::all();
    	return view("webquantri.loaisanpham.danhsachsp", compact("loaisp"));
    }

    public function getthemloaisanpham()
    {
    	return view("webquantri.loaisanpham.themloaisp");
    }

    public function posthemloaisanpham(Request $rq)
    {
    	$rq->validate(
    		[
    			'name'        			=> 'required|min:6|max:50|unique:type_products,name',
    			'description' 			=> 'required',
    			'hinh'		  			=> 'required|file|mimes:jpg,jpeg,bmp,png,gif'	
    		],
    		[
    			'name.required' 		=> 'Vui lòng nhập tên loại sản phẩm',
    			'name.min'				=> 'Nhập tối thiểu 6 ký tự',
    			'name.max'				=> 'Nhập tối đa 50 ký tự',
    			'name.unique'			=> 'Tên loại này đã tồn tại',
    			'description.required'	=> 'Vui lòng nhập mô tả',
    			'hinh.required'			=> 'Chưa chọn tập tin',
    			'hinh.mimes'			=> 'Chỉ chọn các file có phần tử mở rộng là jpg, bmp, png, gif'
    		]);

    	$loaisp 			 = new type_products;
    	$loaisp->name 		 = $rq->name;
    	$loaisp->description = $rq->description;

    	if($rq->hasFile('hinh'))
    	{
    		$file 			= $rq->file('hinh');
    		$fn 			= $file->getClientOriginalName();
    		$fn 			= time()."_".$fn;
    		$file->move("source/image/product", $fn);
    		$loaisp->image 	= $fn;
    	}
    	else
    		$loaisp->image = "";

    	$loaisp->save();

    	return redirect()->back()->with("thongbao", "Thêm loại sản phẩm thành công");
    }
}
