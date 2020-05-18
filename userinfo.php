<?php

$con = mysqli_connect('localhost','root');

if ($con) {
	echo "connection successfull";
}
else{
	echo "no connection";
}


mysqli_select_db($con, 'userinfo');
$user = $_POST['name'];
$email = $_POST['email'];
$comment = $_POST['msg'];

$query = "insert into msg (username, email,	comments) values('$user','$email','$comment')";

echo "$query";

mysqli_query($con, $query);

?>