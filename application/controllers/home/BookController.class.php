<?php
	class BookController{
function __construct(){
}
function IndexAction(){
echo 'hellowbook';
include_once(HELPER_PATH.'Helper.class.php');
//$helper = new Helper;
echo Helper::getOS();
}

	}
