<?php

    if (isset($_POST['submit']))
    {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

   
    //database connection 
    $conn = new mysqli('localhost','root','','test');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
    } 
    else {
		$stmt = $conn->prepare("INSERT INTO contact (name, email, message) values(?, ?, ?)");
		$stmt->bind_param("sss", $name, $email, $message);
		$execval = $stmt->execute();
		echo $execval;
		echo "Message sent succesfully";
		$stmt->close();
		$conn->close();
    }
    }
?>

  