<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\slide;
use App\Models\products;
use App\Models\type_products;
use App\Cart;
use Session;
use App\Models\customer;
use App\Models\bills;
use App\Models\bill_detail;
use App\Models\users;
use Hash;
use Auth;


class webbanhang extends Controller
{
    public function getindex()
    {
    	$slide = slide::All();
    	$new_products = products::where("new",1)->paginate(4);
    	$pro_products = products::where("promotion_price", "!=", 0)->paginate(8);
    	$phanloai     = type_products::all();
    	return view ("buoi08.trangchu", compact("slide", "new_products", "pro_products", "phanloai"));
    }

    public function getgioithieu()
    {
    	$phanloai = type_products::all();
    	return view("buoi08.lop_gioithieu", compact("phanloai"));
    }

    public function getlienhe()
    {
    	$phanloai = type_products::all();
    	return view("buoi08.lop_lienhe", compact("phanloai"));
    }

    public function getloai_sanpham($type)
    {
    	$sp_theoloai = products::where("id_type", $type)->paginate(6);
    	$tenloai     = type_products::where("id", $type)->first();
    	$sp_khac     = products::where("id_type", "<>", $type)->paginate(6);
    	$phanloai    = type_products::all();
    	return view("buoi08.lop_phanloaisanpham", compact("sp_theoloai", "tenloai", "sp_khac", "phanloai"));
    }

    public function getloaisanpham()
    {
    	$sp_theoloai = products::paginate(6);
    	$tenloai     = "Tất cả sản phẩm";
    	$sp_khac     = products::paginate(6);
    	$phanloai    = type_products::all();
    	return view("buoi08.lop_phanloaisanpham", compact("sp_theoloai", "tenloai", "sp_khac", "phanloai"));
    }

    public function getchitiet(Request $rq)
    {
    	$tt_sanpham   = products::where("id", $rq->id)->first();
    	$sp_lienquan  = products::where("id_type", $tt_sanpham->id_type)->get();
    	$sp_moi       = products::where("new",1)->get();
    	$pro_products = products::all();
 		$phanloai     = type_products::all();
    	return view("buoi08.lop_chitiet", compact("tt_sanpham", "sp_lienquan", "sp_moi", "phanloai", "pro_products"));
    }

    public function getaddtocart(Request $req, $id)
    {
    	$a       = 1;
    	$product = products::find($id);
    	$oldCart = Session('cart')?Session::get('cart'):null;
    	$cart    = new Cart($oldCart);
    	$cart->add($product, $id, $a);
    	$req->Session()->put('cart', $cart);
    	return redirect()->back();
    }
    
    public function postsoluongsanpham(Request $req)
    {
    	$id  = $req->id;
    	$qty = $req->soluong;
    	
    	if($qty <= 0)
    		{$qty = 1;}
    	else
    		{$qty = $req->soluong;}

    	$product = products::find($id);
    	$oldCart = Session('cart')?Session::get('cart'):null;
    	$cart    = new Cart($oldCart);
    	$cart->add($product, $id, $qty);
    	$req->Session()->put('cart', $cart);
    	return redirect()->back();
    }
    
    public function getdeltocart($id)
    {
    	$oldCart = Session::has('cart')?Session::get('cart'):null;
    	$cart    = new Cart($oldCart);
    	$cart->removeItem($id);
    	Session::put('cart',$cart);
    	return redirect()->back();
    }

    public function getdathang()
    {
    	return view("buoi08.dathang");
    }


    public function postdathang(Request $req)
    {
    	$cart = Session::get('cart');
    	
    	$customer               = new customer;
    	$customer->name         = $req->name;
    	$customer->gender       = $req->gender;
    	$customer->email        = $req->email;
    	$customer->address      = $req->address;
    	$customer->phone_number = $req->phone;
    	$customer->note         = $req->note;
    	$customer->save();


    	$bill              = new bills;
    	$bill->id_customer = $customer->id;
    	$bill->date_order  = date('Y-m-d');
    	$bill->total       = $cart->totalPrice;
    	$bill->payment     = $req->payment_method;
    	$bill->note        = $req->note;
    	$bill->save();
   	
    	foreach ($cart->items as $key => $value) 
    	{
    		$bill_detail             = new bill_detail;
    		$bill_detail->id_bill    = $bill->id;
    		$bill_detail->id_product = $key;
    		$bill_detail->quantity   = $value['qty'];
    		$bill_detail->unit_price = ($value['price'] / $value['qty']);
    		$bill_detail->save();
    	}
    	Session::forget('cart');
    	return redirect()->back()->with('thongbao', 'Đặt hàng thành công');
    }  

    public function getdangky()
    {
    	return view("buoi08.dangky");
    }

    public function postdangky(Request $req)
    {
    	$req->validate(
    		[
    			'email'       => 'required|email|unique:users,email',
    			'password'    => 'required|min:6|max:20',
    			'fullname'	  => 'required',
    			're_password' => 'required|same:password'
    		],
    		[
    			'email.required'       => 'Vui lòng nhập email',
    			'email.email'		   => 'Không đúng định dạng email',
    			'email.unique'		   => 'Email đã có người sử dụng',
    			'password.required'    => 'Vui lòng nhập password',
    			're_password.same'     => 'Mật khẩu không giống nhau',
    			're_password.required' => 'Chưa nhập lại mật khẩu',
    			'password.min'		   => 'Mật khẩu ít nhất 6 ký tự',
    			'password.max'		   => 'Mật khẩu tối đa 20 ký tự',
    			'fullname.required'	   => 'Chưa nhập họ và tên'	  	
    		]);

    	$user 			 = new users();
    	$user->full_name = $req->fullname;
    	$user->email     = $req->email;
    	$user->password  = Hash::make($req->password);
    	$user->phone     = $req->phone;
    	$user->address   = $req->address;
    	$user->save();
    	return redirect()->back()->with('thanhcong', 'Tạo tài khoản thành công');
    }

    public function getdangnhap()
    {
    	return view("buoi08.dangnhap");
    }

    public function postdangnhap(Request $req)
    {
    	$this->validate($req,
    		[
    			'email'     => 'required|email',
    			'password'  => 'required|min:6|max:20'
    		],
    		[
    			'email.required'    => 'Vui lòng nhập email',
    			'email.email'	    => 'Không đúng định dạng email',
    			'password.required' => 'Vui lòng nhập mật khẩu',
    			'password.min'		=> 'Mật khẩu ít nhát 6 kí tự',
    			'password.max'		=> 'Mật khẩu không quá 20 kí tự'
     		]);
    	$chungthuc = array('email'=>$req->email, 'password'=>$req->password);
    	if (Auth::attempt($chungthuc))
    	{
    		return redirect()->back()->with(['matb'=>'1', 'noidung'=>'Đăng nhập thành công']);
    	}
    	else
    	{
    		return redirect()->back()->with(['matb'=>'0', 'noidung'=>'Đăng nhập không thành công']);
    	}
    }

    public function postdangxuat()
    {
    	Auth::logout();
    	return redirect()->route('trangchu');
    }

    public function gettimkiem(Request $req)
    {
    	if($req->key=="khuyến mãi")
    		$products = products::where("promotion_price", ">", 0)->get();

    	elseif($req->key=="giảm giá")
    		$products = products::where("promotion_price", ">", 0)->get();

    	else
    		$products = products::where('name','like','%'.$req->key.'%')
    						->orWhere('unit_price',$req->key)
    						->get();

    	return view("buoi08.timkiem", compact("products"));
    }

    public function getphanloai()
    {
    	$list_type = type_products::all();
    	return view("admin.danhsachsp", compact("list_type"));
    }

}
