<?php
$dbConfig = getenv();

// $con = mysqli_connect($dbConfig['ecom_db_host'],$dbConfig['ecom_db_uname'],$dbConfig['ecom_db_pwd'],$dbConfig['ecom_db_dbname']);
$con = mysqli_connect('localhost:4306','root','','ecom_store');
?>  
