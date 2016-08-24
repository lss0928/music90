<?php

	//header('Content-Type:text/html;charset=utf-8');
	//获取要收藏的歌曲的id
	$songid=$_POST["songid"];
	$myid=$_POST["myid"];
	

	//连接数据库
	$link=mysql_connect("127.0.0.1","root","");
	if(!$link){
		die("服务器连接失败");
	}
	mysql_select_db("music90");//连接数据库
	mysql_query("set names  utf8");//设置数据编码

	$sql="insert into favorite(user_id,song_id) values('$myid','$songid')";//添加到数据表中
	$result=mysql_query($sql);
	
	if($result){
		echo 1; //收藏成功
	}
	else{
		echo 0; //已收藏过或收藏失败
	}
?>