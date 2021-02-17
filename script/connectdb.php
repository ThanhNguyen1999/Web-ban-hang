<?php
	class database {
		private $user = "root";
		private $password = "";
		private $host = 'localhost';
		private $database = "BANHANGBODOI";

		//Ket noi database
		function connection() {
			$connect = new mysqli($this->host, $this->user, $this->password, $this->database);
			if($connect->connect_error) {
				die('Connect loi');
			} return $connect;
		}
		function printData($query) {
			$connect = $this->connection();
			$result = mysqli_query($connect, $query);
			$arr = [];
			//Chuyển SQL sang mảng
			while($row = mysqli_fetch_assoc($result)) {
				$arr[] = $row;
			}
			return $arr;
		}


		
		function insertData($query) {
			$connect = $this->connection();
			return mysqli_query($connect, $query);
		}

		function getOutArr($arr, $index) {
			$newArr = [];
			foreach($arr as $key=>$value) {
				$newArr[] = $arr[$key][$index];
			}
			return $newArr;
		}

		function printTypeProduct($query, $arr) {
			$query = $this->printData($query);
			$query = $this->getOutArr($query, $arr);
			$query = array_unique($query);
			return $query;
		}

	}
