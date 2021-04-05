<!DOCTYPE html> 
<html> 
<head> 
 <title>Bài Tập 01</title> 
 <meta charset="utf-8"> 
 <meta name="viewport" content="width=device-width, initial-scale=1"> 
 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"> 
</head> 
<body> 
@if(!isset($kq)) 
{{$kq=""}} 
@endif 
<div class="container"> 
	<table class="table table-dark" style="font-size:20pt"> 
		<caption style="font-size:20pt; color:blue; text-align:center " method="get">GIẢI PHƯƠNG TRÌNH BẬC I</caption>  
		<thead class="thead-dark"> 
			<tr> 
			 <th scope="col">STT</th> <th scope="col">Phương Trình</th> <th scope="col">Xử Lý</th>  
			</tr> 
		</thead> 
		<tbody> 
			<tr>
			 	<th scope="row">1</th>
			 	<td>2x + 10 = 0</td> 
				<td>
				 	<a href="{{asset('ptb1/2/10')}}" class="btn btn primary"> Giải </a>
				</td>
			</tr>
			<tr>
			 	<th scope="row">2</th>
			 	<td>-3x + 8 = 0</td>
			 	<td>
			 		<a href="{{asset('ptb1/-3/8')}}" class="btn btn primary"> Giải </a>
			 	</td> 
			</tr> 
			<tr> 
			 	<th scope="row">2</th>
			 	<td>0x + 0 = 0</td>
			 	<td>
			 		<a href="{{asset('ptb1/0/0')}}" class="btn btn primary"> Giải </a>
			 	</td> 
			</tr> 
			<tr> 
				<th scope="row">2</th> 
				<td>0x + 4 = 0</td> 
				<td>
				 	<a href="{{asset('ptb1/0/4')}}" class="btn btn primary"> Giải </a>
				</td> 
			</tr> 
			<tr> 
			 	<th scope="row">2</th>
			 	<td>5x - 12 = 0</td>
			 	<td>
			 		<a href="{{asset('ptb1/5/-12')}}" class="btn btn primary"> Giải </a>
			 	</td> 
			</tr> 
		</tbody> 
	</table> 
	<div style="font-size:20pt; color:red; background-color:yellow; padding:5px; ">
		Kết Quả : {{$kq}}
	</div> 
</div> 
</body> 
</html> 
