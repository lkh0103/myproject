<!DOCTYPE html> 
<html> 
<head> 
<title> @yield('title')</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
<header>
	
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
            <span class="glyphicon glyphicon-home"></span>
          </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">

          <li class="nav-item">
            <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">Truyện ngụ ngôn</a>
          </li>

          <li class="nav-item">
            <a class="nav-link disabled" href="#">Truyện dân gian</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Truyện cổ tích
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{asset('/thanhgiong')}}">thanhgiong</a>
              <a class="dropdown-item" href="{{asset('/thachsanh')}}">thachsanh</a>
              <a class="dropdown-item" href="{{asset('/trikhon')}}">trikhon</a>
            </div>
          </li>
          
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Tôi muốn tìm" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Tìm Kiếm</button>
        </form>
      </div>
    </nav><br/>

</header>
	<div class="container-fluid">
		<div class="row d-flex">
			
		</div>
	</div>
	@section('buoi05.layout')
	@section('pagetitle')
<p>Trang hiện tin</p>
	@show
<p>@yield('content')</p> 

<footer>BIÊN TẬP: NGUYỄN THỊ THAM NHŨNG</footer>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> 
</body> 
</html> 
