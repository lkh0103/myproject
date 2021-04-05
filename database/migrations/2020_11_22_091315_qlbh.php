<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Qlbh extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('news_', function (Blueprint $table) {
        //     $table->id();
        //     $table->timestamps();
        // });
        Schema::create("KHACHHANG", function($tb){
            $tb->increments("Id");
            $tb->string("Hoten",40);
            $tb->string("Diachi",40);
            $tb->string("Dienthoai",13);
            $tb->integer("Doanhso");
        });

        Schema::create("NHANVIEN", function($tb){
            $tb->increments("Id");
            $tb->string("Hoten",40);
            $tb->string("dienthoai",13);
            $tb->date("Ngayvl");
        });

        Schema::create("LOAISP", function($tb){
            $tb->increments("Id");
            $tb->string("Tenloai",40);
        });

        Schema::create("SANPHAM", function($tb){
            $tb->increments("Id");
            $tb->string("Tensp",40);
            $tb->string("Dvt",13);
            $tb->string("Nuocsx",40);
            $tb->integer("Gia");
            $tb->integer("maloai")->unsigned();
            $tb->foreign("maloai")->references("Id")->on("loaisp");
        });

        Schema::create("HOADON", function($tb){
            $tb->increments("Id");
            $tb->date("Ngayhd");
            $tb->integer("Makh")->unsigned();
            $tb->integer("Manv")->unsigned();
            $tb->integer("Trigia");
            $tb->foreign("Makh")->references("Id")->on("KHACHHANG");
            $tb->foreign("Manv")->references("Id")->on("NHANVIEN");
        });

        Schema::create("CTHD", function($tb){
            $tb->integer("Sohd")->unsigned();
            $tb->integer("Masp")->unsigned();
            $tb->integer("Soluong");
            $tb->primary("Sohd","Masp");
            $tb->foreign("Sohd")->references("Id")->on("HOADON");
            $tb->foreign("Masp")->references("Id")->on("SANPHAM"); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('KHACHHANG');
        Schema::dropIfExists('NHANVIEN');
        Schema::dropIfExists('SANPHAM');
        Schema::dropIfExists('HOADON');
        Schema::dropIfExists('CTHD');
    }
}
