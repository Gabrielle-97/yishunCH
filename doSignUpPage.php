<?php
$theID = $_POST['user_id'];
$theUsername = $_POST['usename'];
$thePassword = $_POST['password'];
$theWeight = $_POST['weight'];
$theHeight = $_POST['height'];
$theDOB = $_POST['birthday'];
$theActiveLevel = $_POST['active_level'];

$message = "";

$host = "localhost";
$user = "root";
$pass = "";
$db = "c273_assignment";

//open conncection
$link = $mysqli_connect($host, $user , $pass , $db);

//build SQL query
$query = "INSERT INTO members(user_id,usename,password,weight,height,birthday,active_level) VALUES ('$theID','$theUsername', '$thePassword','$theWeight','$theHeight','$theDOB','$theActiveLevel')";

//Execute SQL query
$result = mysqli_query($link, $query) or die("Error querying database");

if ($result){
    $message = "You have sign up successfully";
}

else{
    $message = "record insertion failed";
}

//Close connection
mysqli_close($link);
?>

