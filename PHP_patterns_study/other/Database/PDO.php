<?php 
namespace other\Database;

use other\IDatabase

/**
* 
*/
class PDO implements IDatabase
{
	function connect($host, $user, $pwd, $dbname)
	{
		$conn = new \PDO("mysql:host=$host;dbname=$dbname", $user, $pwd);
		$this->conn = $conn;
	}

	function query($sql)
	{
		return $this->conn->query($sql);
	}
	function close()
	{
		unset($this->conn);
	}
}