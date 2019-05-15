<?php
/*
if u want to use PDO then use from connection.php file 
*/
#connecting to database
$conn = mysqli_connect('localhost','root','','test');
#sql for inserting the data
$sql = "INSERT INTO `post` ( `posted`) VALUES ('".$_POST['txt_upload']."')";
#querying the sql
mysqli_query($conn,$sql);

?>
