
<?php
	//获取用户名和密码
	$user=$_POST["user"];
	$pwd=md5($_POST["pwd"]);//将输入的密码 加密后 与数据库中的密码 进行匹配

	$link=mysql_connect("127.0.0.1","root","");//连接服务器

	if(!$link)
	{
		die("服务器连接失败");
	}
	mysql_select_db("music90");
	mysql_query("set names utf8");

	$sql="select * from usertable where name='$user' and passward='$pwd'";//查询到匹配数据
	$result=mysql_query($sql);//Resource id #5
	$info=mysql_fetch_assoc($result);
	
	if($info)
	{
		$sql2="select * from usertable where name='$user' and passward='$pwd'";//查询到匹配用户
		$result2=mysql_query($sql2);//Resource id #5
		
		while($info2=mysql_fetch_assoc($result2)){
			$arr[]=$info2; //将数据存入数组
		}
		echo json_encode($arr);
	}
	else
	{
		$sql2="select * from usertable where name='$user'";

		$result2=mysql_query($sql2);

		$info2=mysql_fetch_assoc($result2);

		if($info2)//如果找到了用户名，那就是密码错误
		{
			echo -2;
		}
		else//如果用户名找不到，那就是用户名不存在
		{
			echo -1;
		}

	}

?>