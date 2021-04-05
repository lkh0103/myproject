<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Baitap extends Controller
{
	//Buoi 04
    public function ptb1($a="", $b="") 
 { 
 if ( $a != "" && $b != "" ) 
 { 
 if ($a == 0) 
 if ($b == 0) 
 $kq = "Phương Trình Vô Số Nghiệm"; 
 else 
 $kq ="Phương trình vô nghiệm"; 
 else 
 { 
 $x = number_format(-$b/$a, 2); 
 $kq = "Phương trình có nghiệm x = " . $x; 
 } 
 return view('buoi04.Bai01', compact('kq'));
 }
 else
 return view('buoi04.Bai01');
 }

  public function hinhchunhat()
 {
 return view("buoi04.Bai03");
 }
 public function xulyhcn(Request $rq)
 {
 $cd = $rq->chieudai;
 $cr = $rq->chieurong;
  
 if ($cd != "" && $cr != "")
 {
 if (is_numeric($cd) && is_numeric($cr))
 {
 $cv = ($cd + $cr) * 2;
 $dt = $cd * $cr;
  
 return view("buoi04.Bai03", compact("cd", "cr" ,"cv", "dt"));
 }
 else
 {
 $tb = "<h1 align='center'>Phải Nhập số em ơi!!!!</h1>";
 } 
 } 
 else 
 { 
 $tb = "<h1 align='center'>Phải nhập dữ liệu vào !!!</h1>"; 
 } 
 return view("buoi04.Bai03", compact("tb")); 
 }

//Buoi 05
public function master(){
	return view('buoi05.master');
}

public function layout(){
	return view('buoi05.layout');
}

public function thanhgiong(){
	return view('buoi05.thanhgiong');
}

public function thachsanh(){
	return view('buoi05.thachsanh');
}

public function trikhon(){
	return view('buoi05.trikhon');
}



}


