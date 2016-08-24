<?php
	$txt=$_POST["txt"];

	//连接数据库
	$link=mysql_connect("127.0.0.1","root","");
	if(!$link){
		die("服务器连接失败");
	}
	mysql_select_db("music90");//连接数据库
	mysql_query("set names  utf8");//设置数据编码
	$sql="select * from localmusic where singer like '%$txt%' or songName like '%$txt%'";
	/*%匹配0到多个字符，_匹配1个字符*/
	$result=mysql_query($sql);
	while($info=mysql_fetch_assoc($result)){
		$arr[]=$info;//获取favorite中对应用户收藏的歌曲id
	}

	
	echo json_encode($arr);
?>