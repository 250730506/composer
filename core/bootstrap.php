<?php
namespace core;
// use \web\controller;
class bootstrap{
	public static function run(){
		// echo "php....";//composer dump
		self::parseUrl();
	}
	//分析RUL生成控制器方法常量
	public static function parseUrl(){
		//dd($_SERVER);
		if(isset($_GET['s'])){
			//分析s变量生成控制器方法
			$info = explode('/',$_GET['s']);
			// dd($info);
			$class='\web\controller\\'.ucfirst($info[0]);
			$action=$info[1];
		}else{
			$class="\web\controller\index";
			$action = "show";
		}
		echo ( new $class)->$action();
	}
}
