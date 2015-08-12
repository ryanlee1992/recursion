<?php
	header("Content-type: text/html; charset=utf-8");

	error_reporting(E_ALL&~E_NOTICE);

	require_once ('./db/db.php');
	


	function recur(&$pid=0,&$result=[],$spac=0){


		//连接数据库
		$obj=new db('localhost','root','root','recursion');
		$con = $obj->conn();

		$sql = "SELECT * FROM columns WHERE pid=$pid";
		$res=mysqli_query($con,$sql);

		
		$spac=$spac+2;
		while ($row=mysqli_fetch_assoc($res)) {
			$row['cname']=str_repeat('&nbsp;&nbsp;', $spac).'!-'.$row['cname'];
			$result[]=$row;
			recur($row['id'],$result,$spac);
		}
		
		return $result;
	}


	


	function display($select=0){
		$a=0;
		$rs=recur($a);
		$str ='<select>';
		foreach($rs as $k=>$v){
			if($v['id']==$select){
				$str.= '<option selected="selected">';
				$str.= $v['cname'];
				$str.= '</option>';
			}else{ 
				$str.= '<option>';
				$str.= $v['cname'];
				$str.= '</option>';
			}
		}
		$str.= '</select>';
		return $str;
	}

	
	echo display(1);
	
	
	



























?>