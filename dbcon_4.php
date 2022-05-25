
<?php
$SERVER="localhost";
$USER_NAME="root";
$DB_NAME="abhra_y";
$PASSWORD="";
$conn=mysqli_connect($SERVER,$USER_NAME,$PASSWORD,$DB_NAME);
if ($conn) {
    // echo'DATABASE CONNECTED';
 }
 else {
 echo 'DATABASE NOT CONNECTED';
 }
?>