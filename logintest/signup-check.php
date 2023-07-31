<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])
    && isset($_POST['name']) && isset($_POST['re_password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['name']);
	$pass = validate($_POST['password']);

	
	
	$user_data = $uname;

	if (empty($uname)) {
		header("Location: create.php?error=User Name is required&$user_data");
	    exit();
	}else if(empty($pass)){
        header("Location: create.php?error=Password is required&$user_data");
	    exit();
	}
	

	

	else{

		// hashing the password
        $pass = md5($pass);

	    $sql = "SELECT * FROM contacts WHERE name='$uname' ";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: create.php?error=The username is taken try another&$user_data");
	        exit();
		}else {
           $sql2 = "INSERT INTO contacts(name, password, ) VALUES('$uname', '$pass', )";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
           	 header("Location: create.php?success=Your account has been created successfully");
	         exit();
           }else {
	           	header("Location: create.php?error=unknown error occurred&$user_data");
		        exit();
           }
		}
	}
	
}else{
	header("Location: login.php");
	exit();
}