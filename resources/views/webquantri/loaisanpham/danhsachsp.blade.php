@extends("webquantri.layout")
@section("content")
	<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Danh Sách Sản Phẩm</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th width="5%">Mã Loại</th>
                                <th width="20%">Tên Loại</th>
                                <th width="40%">Mô Tả</th>
                                <th width="20%">Hình</th>
                                <th colspan="2">Thao Tác</th>                             
                            </tr>
                        </thead>
                        <tbody>
                        			@foreach($loaisp as $sp)
                            <tr class="odd gradeX" align="center">
                                <td align="center">{{$sp->id}}</td>
                                <td>{{$sp->name}}</td>
                                <td>{{$sp->description}}</td>
                                <td align="center"><img src="source/image/product/{{$sp->image}}" width="50" alt="{{$sp->name}}"></td>      
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="#"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="#">Edit</a></td>
                            </tr>  
                            		@endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
    </div>
@endsection