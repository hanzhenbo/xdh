<?php 
	namespace Home\Controller;
	use Think\Controller;
	use Home\Model\UserModel;
	class UserController extends Controller{
		public function index(){
			echo "666";
		}

		public function model(){
			//创建Model基类，传递product表，mall_user
			$user = new UserModel('Product');
			var_dump($user->select());

			// $user = M();
		}
	}
 ?>