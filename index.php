<?php  
/** 
* wechat php test 
*/  

require_once("./wx_server/wechatCallbackapiTest.class.php");
require_once("./wx_server/configure.php");

//construct instruct of wechatCallbackapiTest class_alias
$wechatObj = new wechatCallbackapiTest();

//valid() only used for validation when first time connect to wechat server
//$wechatObj->valid();

//create menu on wechat public platform
//$wechatObj->wxCreateMenu();

//response the message
$wechatObj->responseMsg();
?>  
