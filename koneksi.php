<?php

$conn = mysqli_connect("localhost", "root", "", "warehouse");

if (mysql_connect_errno()) {
 echo "failed to connect to MySQL : " . mysqli_connect_error();
 exit();
}
