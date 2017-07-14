<?php 
namespace other;

interface IDatabase
{
	function connect($host, $user, $pwd, $dbname);
	function query($sql);
	function close();
}