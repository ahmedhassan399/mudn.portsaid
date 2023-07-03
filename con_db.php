<?php
  $dsn='mysql:host=localhost;dbname=mudn';  
  $user='root';
  $pass='';
  try{
    $con= new PDO($dsn,$user,$pass);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
  catch(PDOException $e)
    {
  echo "Failed" . $e->getMessage(); 
  }
?>