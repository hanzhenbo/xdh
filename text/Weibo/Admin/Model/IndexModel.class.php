<?php 
	namespace Admin\Model;
	use Think\Model;
	class IndexModel extends Model{
		public function child(){
			$han=M("product");
		}
	}