
<?php

	if(!empty($_POST))
	{
		$user=$_POST["user"];
		$pwd=md5($_POST["pwd"]);//密码加密md5($_POST["pwd"])

		
		$link=mysql_connect("127.0.0.1","root","");//连接服务器
		if(!$link){die("服务器连接失败！");}
		mysql_select_db("music90");//选择数据库
		mysql_query("set names utf8");//设置数据编码

		$sql="insert into usertable(name,passward) values('$user','$pwd')";//将信息添加导数据表中
		if(mysql_query($sql))
		{
			echo 1;
		}
		else
		{
			echo 0;
		}
		
	}
	
?>