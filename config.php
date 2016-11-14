<?
$host = "localhost";
$user = "root";
$pass = "123456";

$dbname = "db_winet";
$conndb = mysql_connect($host,$user,$pass) or die ("Error");

mysql_select_db($dbname,$conndb);

mysql_query("SET NAMES UTF8")





?>