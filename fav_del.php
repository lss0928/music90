<?php
	$myid=$_POST["myid"];
	$songid=$_POST["songid"];

	//连接数据库
	$link=mysql_connect("127.0.0.1","root","");
	if(!$link){
		die("服务器连接失败");
	}
	mysql_select_db("music90");//连接数据库
	mysql_query("set names  utf8");//设置数据编码
	$sql="delete from favorite where user_id='$myid' and song_id='$songid'";
	$result=mysql_query($sql);
	if($result){
		echo 1;
	}
	else{
		echo 0;
	}
?>