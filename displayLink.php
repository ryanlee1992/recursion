<?php
	header("Content-type: text/html; charset=utf-8");

	error_reporting(E_ALL&~E_NOTICE);

	require_once ('./db/db.php');
	

	function getList($id,&$result=[]){
		//连接数据库
		$obj=new db('localhost','root','root','recursion');
		$con = $obj->conn();

		$sql = "SELECT * FROM columns WHERE id=$id";
		$res=mysqli_query($con,$sql);

		$row=mysqli_fetch_assoc($res);

		if($row){
			$result[]=$row;
			getList($row['pid'],$result);
		}
		return $result;

	}

	
	// print_r($rs);


	function dlink(){ 
		$rs=getList(11);
		krsort($rs);
		foreach ($rs as $k => $v) {
			$str.= "<a href='#'>{$v['cname']}</a>>";
			
			/*echo '<a href="#">';
			echo $v['cname'];
			echo '</a>>';*/
		}
		return $str;
	}


	$string=dlink();
	echo $string;























?>