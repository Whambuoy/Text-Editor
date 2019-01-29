<?php

$servername = "localhost";
$username = "root";
$password = "";


//connect to database
$link = mysqli_connect($servername, $username, $password);

if(!$link){
	die('could not connect: ' . mysqli_connect_error());
}

//select database
mysqli_select_db($link,"editor");
echo 'Connected successfully';


//Insert value to table
$value = $_POST['conten'];

$sql = "INSERT INTO text (content) VALUES ('$value')";
if (mysqli_query($link, $sql)){
	echo "New record created successfully";
} else {
		die('Error: ' . mysqli_error($link));

}

mysqli_close($link);


?>