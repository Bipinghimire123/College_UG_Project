<?php
    $servername='localhost';
    $username='root';
    $password='';
    $dbname = "authentication";
    $conn=mysqli_connect("localhost","root","","authentication");
      if(!$conn){
          die('Could not Connect MySql Server:' .mysql_error());
        }
?>