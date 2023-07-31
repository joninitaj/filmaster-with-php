<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	} 

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	if (empty($uname)) {
		header("Location: index.php?error=Email is required");
	    exit();
	}else if(empty($pass)){
        header("Location: index.php?error=Password is required");
	    exit();
	}else{
		$sql = "SELECT * FROM contacts WHERE email='$uname' AND title='$pass'";
		
 
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {

		 	
			$row = mysqli_fetch_assoc($result);

			 if($row["usertype"]=="user")
             {
             $_SESSION['uname'] = $row['email'];
           	$_SESSION['phone'] = $row['phone'];
          	$_SESSION['id'] = $row['id'];
            $_SESSION['pass'] = $row['title'];
          	header("Location: /flt/dest/index.html");
         
	  
          	
		        exit();  } 
		        elseif($row["usertype"]=="admin"){
		        	$_SESSION['uname'] = $row['email'];
           	$_SESSION['phone'] = $row['phone'];
          	$_SESSION['id'] = $row['id'];
            $_SESSION['pass'] = $row['title'];
            	header("Location: /flt/logintest/read.php");
            	
		        exit(); }
           else{
				header("Location: index.php?error=Incorect Email or password");
		        exit();
			}
		}else{
			header("Location: index.php?error=Incorect Email or password");
	        exit();
		}
	}
	
}else{
	header("Location: index.php");
	exit();
}
