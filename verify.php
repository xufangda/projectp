<?php

//读取数据

$postStr = $GLOBALS["HTTP_RAW_POST_DATA"];

if (!empty($postStr))
{
	//初始化数据模块
	$postObj = json_decode($postStr);
    echo $postObj;
    //***********************************************************************

	//订阅与退订模块

}



else
{
    echo "input something";
   	exit;
}

?>