<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>GIAO DIỆN</title>
    <style type="text/css">{margin: 0px; padding: 0px}</style>
  </head>
  <body>

    <!-- THANH NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
            <span class="glyphicon glyphicon-home"></span>
          </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Khuyến Mãi<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Đặt Hàng</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Dụng Cụ Làm Bánh
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Khuôn, Khay</a>
              <a class="dropdown-item" href="#">Bát trộn</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Khuôn Dập bánh quy</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Tin Tức</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Tôi muốn tìm" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Tìm Kiếm</button>
        </form>
      </div>
    </nav><br/>

    <!-- CAROUSEL -->
    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-3">
                <ul style="list-style-type: none;">
                    <li>
                        <a href="#" class="btn btn-primary" style="width: 100%">Loai 1</a>
                    </li>
                    <li>
                        <a href="#" class="btn btn-primary" style="width: 100%">Loai 2</a>
                    </li>
                    <li>
                        <a href="#" class="btn btn-primary" style="width: 100%">Loai 3</a>
                    </li>
                    <li>
                        <a href="#" class="btn btn-primary" style="width: 100%">Loai 4</a>
                    </li>
                    <li>
                        <a href="#" class="btn btn-primary" style="width: 100%">Loai 5</a>
                    </li>
                    <li>
                        <a href="#" class="btn btn-primary" style="width: 100%">Loai 6</a>
                    </li>
                    <li>
                        <a href="#" class="btn btn-primary" style="width: 100%">Loai 7</a>
                    </li>
                </ul>
            </div>


            <div class="col-lg-9">
        <div id="abc" class="carousel slide" data-ride="carousel" style="width:100%; height: 300px">
        <ol class="carousel-indicators">
            <li data-target="#abc" data-slide-to="0" class="active"></li>
            <li data-target="#abc" data-slide-to="1"></li>
            <li data-target="#abc" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset('images/Buoi03/banner01.jpg')}}" class="d-block w-100" alt="..." height="300px">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('images/Buoi03/banner02.jpg')}}" class="d-block w-100" alt="..." height="300px">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('images/Buoi03/banner03.jpg')}}" class="d-block w-100" alt="..." height="300px">
                </div>
        </div>
        <a class="carousel-control-prev" href="#abc" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#abc" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    
      <!-- SẢN PHẨM -->
            <br/>
            <div class="card-deck">
            <div class="card" style="width: 90%;">
                <img src="{{asset('images/Buoi03/xe1.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">
                        Some quick example text to build on the card title and make up the bulk of the card's content.
                    </p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>

            <div class="card" style="width: 90%;">
                <img src="{{asset('images/Buoi03/xe2.jpg')}}"
                      class="card-img-top" alt="...">
                 <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">
                        Some quick example text to build on the card title and make up the bulk of the card's content.
                    </p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                 </div>
            </div>

            <div class="card" style="width: 90%;">
                <img src="{{asset('images/Buoi03/xe3.jpg')}}" class="card-img-top" alt="...">
                 <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">
                    Some quick example text to build on the card title and make up the bulk of the card's content.
                    </p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                 </div>
            </div>
        </div>

        <br/>
            <div class="card-deck">
            <div class="card" style="width: 90%;">
                <img src="{{asset('images/Buoi03/xe1.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">
                        Some quick example text to build on the card title and make up the bulk of the card's content.
                    </p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            
            <div class="card" style="width: 90%;">
                <img src="{{asset('images/Buoi03/xe2.jpg')}}"
                      class="card-img-top" alt="...">
                 <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">
                        Some quick example text to build on the card title and make up the bulk of the card's content.
                    </p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                 </div>
            </div>

            <div class="card" style="width: 90%;">
                <img src="{{asset('images/Buoi03/xe3.jpg')}}" class="card-img-top" alt="...">
                 <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">
                    Some quick example text to build on the card title and make up the bulk of the card's content.
                    </p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                 </div>
            </div>
        </div>


                </div>
            </div>
        </div>
    </div><br/>
    
   

      <!-- SẢN PHẨM 
      
<div class="card" style="width: 30%;">
    <img src="{{asset('images/Buoi03/xe1.jpg')}}" 
          class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
</div> 

<div class="card">
      <div class="col-lg-3" style="width: 100%;">
    <img src="{{asset('images/Buoi03/xe1.jpg')}}" 
          class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
</div> 
            -->


      

    <!-- THẺ FORM 
    <form>
  <div class="form-row">
    <h1>Register Information</h1>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" id="inputPassword4">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Address 2</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">State</label>
      <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Zip</label>
      <input type="text" class="form-control" id="inputZip">
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Sign in</button>
</form>
        -->

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>