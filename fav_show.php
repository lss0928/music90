
<?php
	$songidArr=implode(",",$_POST["songidArr"]);//将数组转化为字符串
	//连接数据库
	$link=mysql_connect("127.0.0.1","root","");
	if(!$link){die("服务器连接失败");}
	mysql_select_db("music90");//连接数据库
	mysql_query("set names  utf8");//设置数据编码

	$sql="select * from localmusic where id in(".$songidArr.")";
	$result=mysql_query($sql);
	while($info=mysql_fetch_assoc($result)){
		$song[]=$info;
	}
	echo json_encode($song);
?>