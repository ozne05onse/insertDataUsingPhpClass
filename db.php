<?php

define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'');
define('DB_NAME', 'cart');

class DB_con {
	function __construct() {
		$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
			$this->dbh=$con;
			// Check connection
			if (mysqli_connect_errno()){
				echo "Failed to connect to MySQL: " . mysqli_connect_error();
			}
		}

 
	function insert($name,$lname,$person,$table,$time,$date) {
		$res = mysqli_query("INSERT INTO order_info(fname,lname,persons,table,ortime,ordate) VALUES('$name','$lname','$person','$table','$time','$date')");
		return $res;
 	}
}

?>