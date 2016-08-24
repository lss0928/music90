<?php
	$link=mysql_connect("127.0.0.1","root","");//连接服务器

	if(!$link)
	{
		die("服务器连接失败");
	}
	mysql_select_db("music90");
	mysql_query("set names utf8");
	$sql="select * from skintable";//查询到匹配数据
	$result=mysql_query($sql);//Resource id #5

	while($info=mysql_fetch_assoc($result)){
		$arr[]=$info;
	}
	print_r(json_encode($arr));	//json_encode();将php变量转换为json字符串
?>