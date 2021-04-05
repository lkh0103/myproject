@extends("buoi08.master")
@section("noidung")
	<div class="rev-slider">
		<div class="fullwidthbanner-container">
			<div class="fullwidthbanner">
			<div class="bannercontainer" >
			<div class="banner" >
				<ul>
				<!-- THE FIRST SLIDE -->
											@foreach($slide as $sl)											
				<li data-transition="boxfade" data-slotamount="20" class="active-revslide" style="width: 100%; height: 100%; overflow: hidden; z-index: 18; visibility: hidden; opacity: 0;">
			<div class="slotholder" style="width:100%;height:100%;" data-duration="undefined" data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined" data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined" data-bgposition="undefined" data-kenburns="undefined" data-easeme="undefined" data-bgfit="undefined" data-bgfitend="undefined" data-owidth="undefined" data-oheight="undefined">
			<div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" data-lazydone="undefined" src="source/image/slide/{{$sl->image}}" data-src="source/image/slide/{{$sl->image}}" style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url('source/image/slide/{{$sl->image}}'); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit;">
			</div>
			</div>
				</li>	
											@endforeach
				</ul>
			</div>
			</div>
			<div class="tp-bannertimer"></div>
			</div>
		</div>
				<!--slider-->
	</div>
	
	<div class="container">
		<div id="content" class="space-top-none">
			<div class="main-content">
				<div class="space60">&nbsp;</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="beta-products-list">
							<h4>Sản Phẩm Mới</h4>
							<div class="beta-products-details">
								<p class="pull-left">Tìm thấy {{count($new_products)}} sản phẩm</p>
								<div class="clearfix"></div>
							</div>

							<div class="row">
												@foreach($new_products as $new_p)
								<div class="col-sm-3">
									<div class="single-item">
														@if($new_p->promotion_price!=0)
										<div class="ribbon-wrapper">
										<div class="ribbon sale">Sale</div>
										</div>
														@endif
										<div class="single-item-header">
											<a href="{{route('chitiet',$new_p->id)}}"><img src=" {{asset('source/image/product/'.$new_p->image)}} " alt="" height="220px"></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title"> {{$new_p->name}} </p>
											<p class="single-item-price" style="font-size: 14px">
														@if($new_p->promotion_price==0)
												<span class="flash-sale">{{number_format($new_p->unit_price)}} đồng</span>
														@else
												<span class="flash-del">{{number_format($new_p->unit_price)}} đồng</span>
												<span class="flash-sale">{{number_format($new_p->promotion_price)}} đồng</span>
														@endif
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="{{route('themgiohang', $new_p->id)}}"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="{{route('chitiet',$new_p->id)}}">Chi Tiết<i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
														@endforeach
							</div><br/>
							<div class="row">{{$new_products->links()}}</div>
						</div> <!-- .beta-products-list -->

						<div class="space50">&nbsp;</div>


						<div class="beta-products-list">
							<h4>Sản Phẩm Bán Chạy</h4>
							<div class="beta-products-details">
								<p class="pull-left">Tìm thấy {{count($pro_products)}} sản phẩm</p>
								<div class="clearfix"></div>
							</div>
							<div class="row">
													@foreach($pro_products as $pro_p)
								<div class="col-sm-3">
									<div class="single-item">
										@if($pro_p->promotion_price!=0)
										<div class="ribbon-wrapper">
										<div class="ribbon sale">Sale</div>
										</div>
														@endif
										<div class="single-item-header">
											<a href="{{route('chitiet',$pro_p->id)}}">
												<img src=" {{asset('source/image/product/'.$pro_p->image)}} " alt="" 
												height="220px">
											</a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title"> {{$pro_p->name}} </p>
											<p class="single-item-price" style="font-size: 14px">
														@if($pro_p->promotion_price==0)
												<span class="flash-sale">{{number_format($pro_p->unit_price)}} đồng</span>
														@else
												<span class="flash-del">{{number_format($pro_p->unit_price)}} đồng</span>
												<span class="flash-sale">{{number_format($pro_p->promotion_price)}} đồng</span>
														@endif
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="{{route('themgiohang', $pro_p->id)}}"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="{{route('chitiet',$pro_p->id)}}">Chi Tiết<i class="fa fa-chevron-right"></i></a>
											<div class="space50">&nbsp;</div>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
													@endforeach
							</div><br/>
							<div class="row">{{$pro_products->links()}}</div>
						</div> <!-- .beta-products-list -->
					</div>
				</div> <!-- end section with sidebar and main content -->


			</div> <!-- .main-content -->
		</div> <!-- #content -->
	</div> <!-- .container -->
@endsection