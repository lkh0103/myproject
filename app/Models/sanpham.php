<?php
	namespace App;
	use Illuminate\Database\Eloquent\Model;

	class sanpham extends Model
	{
		protected $table = "sanpham";
		public $timestamps = false;

		public function loaisp()
		{
			return $this->belongsTo("App\loaisp","maloai","Id");
		}
	}
?>