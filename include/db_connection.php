<?php
/*Set connection to Database*/
$servername="127.0.0.1";
$username="root";
$password="";
$dbname="afinaldressmeapp_db";

$conn=mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
	die("Connection Failed:". mysqli_connect_error());
}
require_once $_SERVER['DOCUMENT_ROOT'].'/dressmeapp_v2/config.php';
require_once BASEURL.'helper/helper.php';
