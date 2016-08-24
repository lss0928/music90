<?php
	//判断用户名是否已经被注册
	$user=$_POST["user"];//接收用户名
	$link=mysql_connect("127.0.0.1","root","");//连接服务器

	if(!$link){die("服务器连接失败！");}
	mysql_select_db("music90");//选择数据库
	mysql_query("set names utf8");//设置数据编码

	$sql="select * from usertable where name='$user'";
	$result=mysql_query($sql);//若语法出错，返回false,否则，无论数据库无论有无数据，都返回结果集
	$info=mysql_fetch_assoc($result);//提取结果集
	if($info)//若结果集为真，说明已经被注册
	{
		echo 0;
	}
	else  //若结果集为false,说明未被注册，可以使用
	{
		echo 1;
	}
?>