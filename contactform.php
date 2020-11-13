<?php

    if (isset($_POST['submit']))
    {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

   
    //database connection 
    $conn = new mysqli('localhost','root','','test'); //opens new connection to the mysql server
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);  //displays error if the connection fails
    } 
    else {
		$stmt = $conn->prepare("INSERT INTO contact (name, email, message) values(?, ?, ?)"); //prepare a sql statement for execution
		$stmt->bind_param("sss", $name, $email, $message); //Binds variables to a prepared statement as parameters
		$execval = $stmt->execute();  //executes the prepared query 
		echo $execval;
		echo "Message sent succesfully";
		$stmt->close();
		$conn->close(); //closes previously opened database connection
    }
    }
?>

  