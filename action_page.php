<?php

$con = mysqli_connect("localhost", "root", "");

mysqli_select_db($con, "login");

$insert = "insert into login_23 values
('rishav','raj')";
mysqli_query($con, $insert);
