<?php
$servername='localhost';
$username='root';
$password='';
$dbname = "form_draft";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(!$conn){
   die('Could not Connect My Sql:' .mysql_error());
}
?>