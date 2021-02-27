<?php
	function Connection() 
	{

		$server="localhost";
		$user="xxxxx";
		$pass="xxxxx;
		$db="ncnuiot";
		$connection = mysql_pconnect($server, $user, $pass);

		if (!$connection) {
	    	die('MySQL ERROR: ' . mysql_error());
		}
		
		mysql_select_db($db) or die( 'MySQL ERROR: '. mysql_error() );
		mysql_query("SET NAMES UTF8");
		session_start();
	
		return $connection  ;	
	}
	
?>