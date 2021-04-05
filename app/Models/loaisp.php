<?php
	namespace App;
	use Illuminate\Database\Eloquent\Model;

	class loaisp extends Model
	{
		protected $table = "loaisp";
		public $timestamps = false;

		public function sanpham()
		{
			return $this->hasMany("App\sanpham","maloai","Id");
		}
	}
?>