<!DOCTYPE html> 
<html> 
<head> 
<title>Bài Tập 01</title> 
<meta charset="utf-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1"> 
 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
 <style> 
 table, input {font-size:20pt; border:2px solid blue;} 
 .nendisabled {background-color:yellow; color:red;} 
 </style> 
</head> 
<body> 
@if (! isset($cv)) 
 {{$cd=""}} 
 {{$cr=""}} 
 {{$cv=""}} 
 {{$dt=""}} 
@endif 
@if (! isset($tb))
{{$tb=""}}
@endif
<div class="container">
<h1 align="center">Tính Chu Vi Và Diện Tích HCN</h1>
<form action="hinhchunhat" method="post">
{{csrf_field()}}
<table class="table table-dark" width="500" align="center" cellspacing="0"  cellpadding="10" border="1">
<tr> 
<td>Nhập Chiều Dài</td> 
<td><input type="text" name="chieudai"  
value="{{$cd}}"/></td> 
</tr> 
<tr> 
<td>Nhập Chiều Rộng</td> 
<td><input type="text" name="chieurong"  
value="{{$cr}}"/></td> 
</tr> 
<tr> 
<td>Chu Vi</td> 
<td><input type="text" name="chuvi" value="{{$cv}}"  
class="nendisabled" disabled/></td> 
</tr> 
<tr> 
<td>Diện Tích</td> 
<td><input type="text" name="dientich" value="{{$dt}}"  
class="nendisabled" disabled/></td> 
</tr> 
<tr align="center"> 
<td colspan="2"><input type="submit" name="tinh" value="  
Thực Hiện Tính"/></td> 
</tr> 
</table> 
 </form> 
 <div style="font-size:20pt; color:red"> 
 {!! $tb !!} 
 </div> 
</div> 
</body> 
</html>
