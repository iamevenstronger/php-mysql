<?php
// server connection
$servername = "localhost";
$username = "root";
// their is no password in default
$password = "";
// our database name
$dbname = "product";
  // got input from html using '$_POST[]'
   $product_name = $_POST['p_name'];
   $product_price = $_POST['p_price'];
   $product_quantity = $_POST['p_quantity'];
  // sql connection
     if($product_name == "" || $product_price == "" || $product_quantity == ""){
         die("Please enter the feilds!");
     }
  // lets check its connected
  $conn = new mysqli($servername, $username, $password,$dbname);
  
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  } 
  // in php we use '.' operator for string concatenation!
  // store sql query in variable
  // we set id as auto increment so set it as empty
  $sql = "insert into product_details(product_id,product_name,product_price,product_quantity) values('','".$product_name."', '".$product_price."', '".$product_quantity."')";
  // query execution
  if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }

?>