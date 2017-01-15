<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this->display();
    }
    public function upload(){
	    $upload = new \Think\Upload();// 实例化上传类
	    $upload->maxSize   =     3145728 ;// 设置附件上传大小
	    $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg','zip');// 设置附件上传类型
	    $upload->rootPath  =     './Public/upload/'; // 设置附件上传根目录
	    $upload->savePath  =     ''; // 设置附件上传（子）目录
	    $upload->autoSub   =	  false;
	    // 上传文件 
	    $info   =   $upload->upload();
	    if(!$info) {// 上传错误提示错误信息
	        $this->error($upload->getError());
	    }else{// 上传成功
	        $this->success('上功！');
	        // $this->redirect('Index/child');
    	}
	}

	// public function child(){
	// 	$IndexModel=D("product");   //实例化
	// 	$prodts =$IndexModel->select();
	// 	$this->assign("prodts",$prodts);
	// 	$this->display();
	// }

	// public function addpic(){
	// 	$pic=D("product");
	// 	if ($pic->create()) {
	// 		$pic->add();
	// 		$this->redirect('Index/child');
	// 	}
	// }
}