<?php
 define('HOST','212.48.89.179');
 define('USERNAME', 'to-do-wqw-u-035652');
 define('PASSWORD','564620!');
 define('DB','to-do-wqw-u-035652');
 
 	$task = strip_tags( $_POST['task'] );
	$date = date('Y-m-d');
	$time = date('H:i:s');
 
 $con = mysqli_connect(HOST,USERNAME,PASSWORD,DB);
 

 $task = $_POST['new-task'];
 
 $sql = "insert into tasks VALUES ('', '$task', '$date', '$time')";
 
 if(mysqli_query($con, $sql)){
 echo 'success';
 }
?>