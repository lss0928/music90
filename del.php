<?php
	//获取要删除的歌曲的id
	$id=$_POST["id"];
	//连接数据库
	$link=mysql_connect("127.0.0.1","root","");
	if(!$link){die("服务器连接失败");}
	mysql_select_db("music90");//连接数据库
	mysql_query("set names  utf8");//设置数据编码
	$sql="delete from localmusic where id='$id'";//删除对应id的歌曲
	$result=mysql_query($sql);
	if($result){
		echo 1; //删除成功
	}
	else{
		echo 0; //删除失败
	}
?>