<?php
class Db{
	public $conn;
	public function __construct(){	//构造函数
		$this->conn=mysqli_connect('localhost','root','root','xian');
		//创建链接数据库的变量，mysql_connect为链接函数，变量参数分别为，数据库URL地址，数据库账号，数据库密码，数据库名称
		if($this->conn){
		}
		else{
			echo "<script>alert('数据库连接失败')</script>";
		}

	}
	public function __destruct(){	//析构函数

	}
	public function select($sql="select * from user"){   //查询数据
		$rows=[];
		$res=mysqli_query($this->conn,$sql);	
		while($row=mysqli_fetch_assoc($res)){
			$rows[]=$row;
		}
		return $rows;
	}                        
	public function insert($sql){     //插入数据
		$res=mysqli_query($this->conn,$sql);
		print_r($res);
		return $res;
	}		
	public function update($sql){    //更新数据
		$res=mysqli_query($this->conn,$sql);
		print_r($res);
		return $res;
	}		
	public function delete($sql){		//删除数据
		$res=mysqli_query($this->conn,$sql);
		print_r($res);
		return $res;
	}		
}
/*$db=new  Db();
$sql="insert into shopping_car values ('$userid', '$goodsid', '$amount', '$price')";
$res=$db->insert($sql);*/
/*$pwd='Bill';
$sql="select username from user where password ='$pwd'";*/
//$rows=$db->select($sql);
/*echo "<pre>";
print_r($res);
echo "<pre>";*/
?>
