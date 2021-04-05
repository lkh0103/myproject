@extends("webquantri.layout")
@section("content")
	<div id="page-wrapper">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Thêm Sản Phẩm</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                    	@if(count($errors)>0)
                    		@foreach($errors->all() as $err)
                    			<div class="alert alert-danger">
                    				{{$err}} <br/>
                    			</div>
                    		@endforeach
                    	@endif
                        <form action="{{route('themmoisp')}}" method="POST" enctype="multipart/form-data">
                        	{{csrf_field()}}
                        	@if(Session::has('thongbao'))
								<div class="alert alert-success">{{Session::get('thongbao')}}</div>
							@endif
                            <div class="form-group">
                                <label>Tên Sản Phẩm:</label>
                                <input class="form-control" name="name" placeholder="Nhập tên sản phẩm" />
                            </div>
                            <div class="form-group">
                                <label>Mô Tả:</label>
                                <input class="form-control" name="description" placeholder="Nhập mô tả" />
                            </div>
                            <div class="form-group">
                                <label>Hình Ảnh:</label>
                                <input class="form-control" type="file" name="hinh" placeholder="Chọn Hình" />
                            </div>                          
                            <button type="submit" class="btn btn-default">Lưu Trữ</button>
                            <button type="reset" class="btn btn-default">Làm Mới</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
    </div>
@endsection