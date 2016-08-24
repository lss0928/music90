<?php
	//获取要删除的歌曲的id
	$arr=$_POST["arr"];
	
	//连接数据库
	$link=mysql_connect("127.0.0.1","root","");
	if(!$link){die("服务器连接失败");}
	mysql_select_db("music90");//连接数据库
	mysql_query("set names  utf8");//设置数据编码
	
	//implode()将数组转换为字符串		//将字符串转换为数组explode()
	$strid=implode(",",$arr);
	$sql="delete from localmusic where id in(".$strid.")";

	$result=mysql_query($sql);

	if($result){
		echo 1; //删除成功
	}
	else{
		echo 0; //删除失败
	}
?>