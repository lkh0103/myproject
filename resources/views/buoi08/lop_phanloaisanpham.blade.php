@extends("buoi08.master")
@section("noidung")
	<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Danh Mục Loại</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb font-large">
					<a href="{{route('trangchu')}}">Trang Chủ</a> / <span>Sản phẩm</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	
	<div class="container">
		<div id="content" class="space-top-none">
			<div class="main-content">
				<div class="space60">&nbsp;</div>
				<div class="row">
					<div class="col-sm-3">
						<ul class="aside-menu">
							@foreach($phanloai as $l)
							<li><a href="{{route('loaisanpham', $l->id)}}">{{$l->name}}</a></li>
							@endforeach
						</ul>
					</div>
						<div class="col-sm-9">
							<div class="beta-products-list">
								<h4>Sản Phẩm</h4>
								<div class="beta-products-details">
									<p class="pull-left">Tìm Thấy {{count($sp_theoloai)}}</p>
									<div class="clearfix"></div>
								</div>

								<div class="row">
											@foreach($sp_theoloai as $sp)
									<div class="col-sm-4">
										<div class="single-item">
										@if($sp->promotion_price!=0)
										<div class="ribbon-wrapper">
										<div class="ribbon sale">Sale</div>
										</div>
														@endif
										<div class="single-item-header">
											<a href="{{route('chitiet', $sp->id)}}">
												<img src="{{asset('source/image/product/'.$sp->image)}}" height="250px" alt="">
											</a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">{{$sp->name}}</p>
											<p class="single-item-price" style="font-size: 14px">
														@if($sp->promotion_price==0)
												<span class="flash-sale">{{number_format($sp->unit_price)}} đồng</span>
														@else
												<span class="flash-del">{{number_format($sp->unit_price)}} đồng</span>
												<span class="flash-sale">{{number_format($sp->promotion_price)}} đồng</span>
														@endif
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="{{route('themgiohang', $sp->id)}}"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="{{route('chitiet',$sp->id)}}">Chi Tiết<i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div><br/>
										</div>
									</div>
								</div>
										@endforeach
							</div>
							<div class="row">{{$sp_theoloai->links()}}</div>
						</div> <!-- .beta-products-list -->
						


						<div class="space50">&nbsp;</div>

						<div class="beta-products-list">
							<h4>Sản Phẩm Khác</h4>
							<div class="beta-products-details">
								<p class="pull-left">Tìm thấy {{count($sp_khac)}} </p>
								<div class="clearfix"></div>
							</div>
							<div class="row">
										@foreach($sp_khac as $sp)
								<div class="col-sm-4">
									<div class="single-item">
											@if($sp->promotion_price!=0)
											<div class="ribbon-wrapper">
											<div class="ribbon sale">Sale</div>
											</div>
															@endif
										<div class="single-item-header">
											<a href="{{route('chitiet',$sp->id)}}"><img src="{{asset('source/image/product/'.$sp->image)}}" height="250px" alt=""></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">
												{{$sp->name}}
											</p>
											<p class="single-item-price" style="font-size: 14px">
														@if($sp->promotion_price==0)
												<span class="flash-sale">{{number_format($sp->unit_price)}} đồng</span>
														@else
												<span class="flash-del">{{number_format($sp->unit_price)}} đồng</span>
												<span class="flash-sale">{{number_format($sp->promotion_price)}} đồng</span>
														@endif
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="{{route('themgiohang', $sp->id)}}"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="{{route('chitiet',$sp->id)}}">Chi Tiết<i class="fa fa-chevron-right"></i></a>											
											<div class="clearfix"></div><br/>
										</div>
									</div>
								</div>
										@endforeach
							</div>							
							<div class="row">{{$sp_khac->links()}}</div>
						</div> <!-- .beta-products-list -->
					</div>
				</div> <!-- end section with sidebar and main content -->


			</div> <!-- .main-content -->
		</div> <!-- #content -->
	</div> <!-- .container -->
@endsection