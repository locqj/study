<?php 
namespace adapter;

use Datebase;
/**
* 
*/
class Mysql implements IDatebase
{
	
	function connect($host, $user, $pwd, $dbname)
	{
		$conn = mysql_connect($host, $user, $pwd, $dbname);
		mysql_select_db($dbname, $conn);
		$this->conn = $conn;
	}

	function query($sql)
	{
		return mysql_query($sql, $this->conn);
	}

	function close($sql)
	{
		return mysql_close($sql, $this->conn);
	}
}
 ?>