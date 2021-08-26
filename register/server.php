<?php
// start session
session_start();

// initialize variables 
$username = "";
$email = "";
$error = array();

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'registration');





?>