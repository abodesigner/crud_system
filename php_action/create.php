<?php
  require_once 'db_connection.php';


  // if form is submitted
  if ($_POST) {
    $name    = $_POST['name'];
    $address = $_POST['address'];
    $contact = $_POST['contact'];
    $active  = $_POST['active'];



    $sql = "INSERT INTO members(name, contact, address, active) VALUES ('$name','$contact','$address','$active')";
    $query = $con->query($sql);
    if ($query === TRUE ) {
      echo "Member Successfully Added";
    } else {
      echo "Error";
    }

    $con->close();



  }




?>
