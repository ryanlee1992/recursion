<?php
	header("Context-type:text/html; charset=utf8");
	error_reporting(E_ALL&~E_NOTICE);
	require_once ('./db/db.php');

	function getList(){
		//连接数据库
		$obj = new db('localhost','root','root','recursion');
		$con = $obj->conn();

		$sql = "SELECT id,cname,concat(path,',',id)as fpath FROM category ORDER BY fpath asc";
		$query=mysqli_query($con,$sql);

		while($row=mysqli_fetch_assoc($query)){
			$row['cname']=str_repeat('&nbsp;&nbsp;', count(explode(',',trim($row['fpath'],',')))).'!--'.$row['cname'];
			$res[]=$row;
		}


		return $res;



	}

	


	function display(){

		$res=getList();
		$str ='<select>';
		foreach($res as $k=>$v){
			$str.="<option>{$v['cname']}</option>";
		}
		$str.='</select>';

		return $str;

	}

	echo display();



	






















?>