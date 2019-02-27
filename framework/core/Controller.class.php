<?php
//核心控制器
class Controller {
	//提示信息并跳转
	public function jump($url,$message,$wait = 3){
		if ($wait == 0) {
			header("Location:$url");
		} else {
			include CUR_VIEW_PATH . "message.html";
		}
		//一定要退出
		exit; //die
	}


	//加载工具类
	public function library($lib){
		include LIB_PATH . "{$lib}.class.php";
	}


	//加载辅助函数文件
	public function helper($helper){
		include HELPER_PATH . "{$helper}.php";
	}
}
