@extends("buoi08.master")
@section("noidung")
	<div class="container">
		<div id="content" class="space-top-none">
			<div class="main-content">
				<div class="space60">&nbsp;</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="beta-products-list">
							<h4>Tìm kiếm</h4>
							<div class="beta-products-details">
								<p class="pull-left">Tìm thấy {{count($products)}} sản phẩm</p>
								<div class="clearfix"></div>
							</div>

							<div class="row">
												@foreach($products as $new_p)
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
										</div><br/>
									</div>
								</div>
														@endforeach
							</div><br/>							
						</div> <!-- .beta-products-list -->

						<div class="space50">&nbsp;</div>


						
					</div>
				</div> <!-- end section with sidebar and main content -->


			</div> <!-- .main-content -->
		</div> <!-- #content -->
	</div> <!-- .container -->
@endsection