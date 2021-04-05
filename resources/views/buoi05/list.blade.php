@section('list')

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

@endsection