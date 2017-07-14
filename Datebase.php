<?php 

namespace adapter;

interface IDatebase
{
	function connect($host, $user, $pwd, $dbname);
	function query($sql);
	function close($sql);
}

 ?>