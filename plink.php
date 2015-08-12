<?php
	
	header("Context-type:text/html;charset:utf8");
	error_reporting(E_ALL&~E_NOTICE);
	Require_once ('./db/db.php');



	function getList($cid){

		$obj = new db('localhost','root','root','recursion');
		$con = $obj->conn();

		$sql = "SELECT id,cname,concat(path,',',id) as fpath from category WHERE id=$cid";
		$query = mysqli_query($con,$sql);

		$row = mysqli_fetch_assoc($query);
		// $ids = explode(',',$row['fpath']);
		$ids =$row['fpath'];
		/*var_dump($ids);
		exit;*/
		$sql_2 = "SELECT * FROM category where id in ($ids) order by id asc";

		$query_2 = mysqli_query($con,$sql_2);

		while($row=mysqli_fetch_assoc($query_2)){
			$result[]=$row;
		}
		return $result;
	}

	

	function display($cid){

		$res=getList($cid);

		foreach ($res as $key => $value) {
			$str.="<a href='#'>{$value['cname']}</a>>";
		}
		return $str;
	}


	echo display(10);















?>