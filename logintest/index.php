<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
     <link rel="stylesheet" href="
https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css
" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body><style type="text/css">
     
     body{
         
        background-image: url('img/backgroundmv.png')
     }
</style>
   <nav style="float:left;margin-right:1800px; margin-bottom:100px; border: none;"><a href="index.html" style="border:none; background:none;">
     <img src="img/back5.png" style="width:50px; height:50px; "> </a></nav>
    
     <form action="login.php" method="post">
     	<h2>LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>Email</label>
     	<input type="text" name="uname" placeholder="email"><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password"><br> 

        
     	<button type="submit">Login</button>
          <p>Don't have a account?<a href="create.php" style=" width:80px;height:44px; "  >  Register</a>  here</p>
     </form>
     <script src="
https://code.jquery.com/jquery-3.5.1.slim.min.js
" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="
https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js
" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="
https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js
" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>