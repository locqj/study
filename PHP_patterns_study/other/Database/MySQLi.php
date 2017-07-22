<?php 
namespace other\Database;

use other\IDatabase;

/**
* 
*/
class MySQLi implements IDatabase
{
	function conntect($host, $user, $pwd, $dbname)
	{
		$conn = mysqli_connect($host, $userm, $pwd, $dbname);
		$this->conn = $conn;
	}

	function query($sql)
	{
		return mysqli_query($this->conn, $sql);
	}

	function close()
	{
		mysqli_close($this->conn);
	}
}