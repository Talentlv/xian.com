<?php
	/**
	 * 
	 */
	class Db{
		public $conn;
		//构造函数
		public function __construct(){
			# code...
			$conf=include('./config.php');
			$this->conn=mysqli_connect('127.0.0.1','root','root','');
			mysqli_query($this->conn,"set names utf8");
		}

		//自定义函数 查询
		public function select($sql="select * from user"){
			# code...
			$rows=[];
			$res=mysqli_query($this->conn,$sql);
			while ($row=mysqli_fetch_assoc($res)) {
				# code...
				$rows[]=$row;
			}
			return $rows;
		}
		//插入
		public function insert($sql){
			# code...
			mysqli_query($this->conn,$sql);
			$res=mysqli_affected_rows($this->conn);
			return $res;
		}
		//修改
		public function update(){
			# code...
			mysqli_query($this->conn,$sql);
			$res=mysqli_affected_rows($this->conn);
			return $res;
		}
		//删除
		public function delete(){
			# code...
			mysqli_query($this->conn,$sql);
			$res=mysqli_affected_rows($this->conn);
			return $res;
		}
		//析构函数
		public function __destruct(){
			# code...
			if ($this->conn) {
				# code...
				mysqli_close($this->conn);
			}
		}
	}
	//实例化
	$db=new Db();
	//查询
	$sql="select * from user";
	$rows=$db->select($sql);
	echo "<pre>";
	print_r($rows);
	echo "</pre>";
	//插入
	$sql="insert into user(name,pwd) value('diaomaowei','123')";
	$rows=$db->insert($sql);
	echo "<pre>";
	print_r($rows);
	echo "</pre>";
?>