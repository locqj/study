<?php

namespace other\Database;

use other\IDatabase;

class MySQL implements IDatabase
{
	function connect($host, $user, $pwd, $dbname)
	{	
		$conn = mysql_connect($host, $user, $pwd);
		mysql_select_db($dbname, $conn);
		$this->conn = $conn;
	}

	function query($sql)
	{
		$res = mysql_query($sql, $this->conn);
		return $res;
	}

	function close()
	{
		mysql_close($this->conn);
	}
}

