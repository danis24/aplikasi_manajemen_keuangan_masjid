<?php
class modelLogin{
	
	function __construct(){
		$connect = mysql_connect("localhost","root","");
		$db = mysql_select_db("aplikasi_masjid");
	}

	function execute($query){
		return mysql_query($query);
	}

	function fetch($var){
		return mysql_fetch_array($var);
	}

	function select($username, $password){
		$query = "SELECT * FROM operator WHERE username = '$username' AND password = md5('$password')";
		return $this->execute($query);
	}

	function __destruct(){

	}
}
?>