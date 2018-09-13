<?php

  // Initioalize the connecton parameters
  $servername = 'localhost';
  $username   = 'root';
  $password   = '';
  $dbname     = 'db_crud';

  // Create the conenction
  $con = new mysqli($servername, $username, $password, $dbname);

  $err = $con->connect_error;
  if($err){
    die("Connection Failed : " . $err);
  } else {
    //die("Connection Success");
  }

?>
