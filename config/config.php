<?php
//to create database search in chrome localhost/phpmyadmin
//to open project in chrome  in chrome localhost/wooxtravel


try{
//host
define("HOST","localhost");

//dbname
define("DBNAME","wooxtravel");

//username
define("USER","root");

//pass
define("PASS","");

$conn =new PDO("mysql:host=".HOST.";dbname=".DBNAME."",USER,PASS);//provide huge no.of database
$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);//its display if any error occur in database
/*if($conn == true){
    echo "db connection is success";
}else{
    echo "error";
}*/
}
catch (PDOException $e) {

   echo $e->getMessage();//raise exception if there is any error in database

}
//5.completed 


?>