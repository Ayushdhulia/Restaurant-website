<?php
 
// servername => localhost
// username => pma
// password => empty
// database name => connection
$conn = mysqli_connect("localhost", "pma", "", "connection");
 
// Check connection
if($conn === false){
    die("ERROR: Could not connect. "
        . mysqli_connect_error());
}
 
// Taking all 5 values from the form data(input)
$name =  $_REQUEST['name'];
$Phone_number = $_REQUEST['Phone_number'];
$email =  $_REQUEST['email'];
$message = $_REQUEST['message'];
 
// Performing insert query execution
// here our table name is college
$sql = "INSERT INTO resturant  VALUES ('$name', 
    '$Phone_number','$email','$message')";
 
if(mysqli_query($conn, $sql)){
    echo "<h3>data stored in a database successfully."
        . " Please browse your localhost php my admin"
        . " to view the updated data</h3>"; 

    echo nl2br("\n$name\n $Phone_number\n "
        . "$email\n $message\n ");
} else{
    echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($conn);
}
 
// Close connection
mysqli_close($conn);
?>