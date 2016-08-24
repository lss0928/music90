<?php
	$id=$_POST["id"];
	$img=$_POST["img"];

	$link=mysql_connect("127.0.0.1","root","");//连接服务器

	if(!$link)
	{
		die("服务器连接失败");
	}
	mysql_select_db("music90");
	mysql_query("set names utf8");

	$sql="update usertable set imgsrc=$img where id=$id";
	
	$result=mysql_query($sql);
	
	if($result){
		echo 1;//设置头像成功
	}
	else{
		echo 0;//设置失败
	}
?>