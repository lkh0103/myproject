@extends("buoi08.master")
@section("noidung")
	<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Thông Tin Sản Phẩm</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb font-large">
					<a href=" {{route('trangchu')}} ">Trang chủ</a> / <span>Chi Tiết Sản Phẩm</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>

	<div class="container">
		<div id="content">
			<div class="row">
				<div class="col-sm-9">

					<div class="row">
						<div class="col-sm-4">
							@if($tt_sanpham->promotion_price!=0)
								<div class="ribbon-wrapper" style="z-index: 1; margin-right: 18px; margin-top: 2px;">
								<div class="ribbon sale" >Sale</div>
								</div>
							@endif
							<img src="{{asset('source/image/product/'.$tt_sanpham->image)}}" height="250px" alt="">
						</div>
						<div class="col-sm-8">
							<div class="single-item-body">
								<p class="single-item-title">{{$tt_sanpham->name}}</p>
								<p class="single-item-price" style="font-size: 14px">
										@if($tt_sanpham->promotion_price==0)
									<span class="flash-sale">{{number_format($tt_sanpham->unit_price)}} đồng</span>
										@else
									<span class="flash-del">{{number_format($tt_sanpham->unit_price)}} đồng</span>
									<span class="flash-sale">{{number_format($tt_sanpham->promotion_price)}} đồng
									</span>
										@endif
								</p>
							</div>

							<div class="clearfix"></div>
							<div class="space20">&nbsp;</div>

							<div class="single-item-desc">
								<p>{{$tt_sanpham->description}}</p>
							</div>
							<div class="space20">&nbsp;</div>

							<p>Lựa chọn:</p>
							<div class="single-item-options">								
								<form action="{{route('soluongsanpham')}}" method="post">
									{{csrf_field()}}
									<label>Số lượng:</label>
									<input type="text" name="soluong" placeholder="1" style="width: 50px; height: 25px">
									<button type="submit" class="add-to-cart" name="id" value="{{$tt_sanpham->id}}">
										<i class="fa fa-shopping-cart" ></i>
									</button>
								</form>								
								</a>
								<div class="clearfix"></div>
							</div>

							<!--<a class="add-to-cart" href="{{route('themgiohang', $tt_sanpham->id)}}">
									<i class="fa fa-shopping-cart"></i>-->

							<!--<div class="quantity">					
								<input type="number" name="qty" class="qty" max="50" min="0" value="qty">
									<a class="add-to-cart" href="{{route('themgiohang', $tt_sanpham->id)}}">
										<i class="fa fa-shopping-cart"></i>
									</a>								
							</div>-->

						</div>
					</div>

					<div class="space40">&nbsp;</div>
					<div class="woocommerce-tabs">
						<ul class="tabs">
							<li><a href="#tab-description">Description</a></li>
							<li><a href="#tab-reviews">Reviews (0)</a></li>
						</ul>

						<div class="panel" id="tab-description">
							<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.</p>
							<p>Consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequaturuis autem vel eum iure reprehenderit qui in ea voluptate velit es quam nihil molestiae consequr, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur? </p>
						</div>
						<div class="panel" id="tab-reviews">
							<p>No Reviews</p>
						</div>
					</div>
					
					<div class="beta-products-list">
						<h4>Sản Phẩm Liên Quan</h4>
						<div class="space50">&nbsp;</div>
						<div class="row">
										@foreach($sp_lienquan as $splq)
							<div class="col-sm-4">
								<div class="single-item">
									@if($splq->promotion_price!=0)
										<div class="ribbon-wrapper">
										<div class="ribbon sale">Sale</div>
										</div>
									@endif
									<div class="single-item-header">
										<a href="{{route('chitiet',$splq->id)}}">
											<img src="{{asset('source/image/product/'.$splq->image)}}" height="250px" alt="">
										</a>
									</div>
									<div class="single-item-body">
										<p class="single-item-title">{{$splq->name}}</p>
								<p class="single-item-price" style="font-size: 14px">
										@if($splq->promotion_price==0)
									<span class="flash-sale">{{number_format($splq->unit_price)}} đồng</span>
										@else
									<span class="flash-del">{{number_format($splq->unit_price)}} đồng</span>
									<span class="flash-sale">{{number_format($splq->promotion_price)}} đồng
									</span>
										@endif
								</p>
									</div>
									<div class="single-item-caption">
										<a class="add-to-cart pull-left" href="{{route('themgiohang', $splq->id)}}"><i class="fa fa-shopping-cart"></i></a>
										<a class="beta-btn primary" href="{{route('chitiet',$splq->id)}}">Chi Tiết<i class="fa fa-chevron-right"></i></a>
										<div class="clearfix"></div>
									</div><br/>
								</div>
							</div>
										@endforeach
						</div>
					</div> <!-- .beta-products-list -->
				</div>
				<div class="col-sm-3 aside">
					
					<div class="widget">
						<h3 class="widget-title">Sản Phẩm Mới</h3>
						<div class="widget-body">
							<div class="beta-sales beta-lists">
										@foreach($sp_moi as $spm)
								<div class="media beta-sales-item">
									<a class="pull-left" href="{{route('chitiet',$spm->id)}}">
										<img src="{{asset('source/image/product/'.$spm->image)}}" alt="">
									</a>
									<div class="media-body">
										{{$spm->name}}<br/>
										<span class="beta-sales-price">{{number_format($spm->unit_price)}}</span>
									</div>
								</div>
										@endforeach
							</div>
						</div>
					</div> <!-- best sellers widget -->
				</div>
			</div>
		</div> <!-- #content -->
	</div> <!-- .container {{asset('source/image/product/'.$tt_sanpham->image)}} -->
@endsection