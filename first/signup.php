<?php
session_start();
include("connection.php");
include("functions.php");
 if($_SERVER['REQUEST_METHOD']=='POST'){
     $user_name=$_POST['user_name'];
     $password=$_POST['password'];
     if (!empty($user_name) && !empty($password)){
         //save to database
         $user_id=5;
         $query="insert into  users (`user_id`,`user_name`,`password`) values ('$user_id','$user_name','$password')";
         if($result=mysqli_query($con,$query)){
                $success="succesuful";
         }
         else{
             $failure="unaleto:".mysqli_error($con);
             echo $failure;
         }
         
     }
     else 
     {
         echo "please enter something ep";
 }}
?>



<!DOCTYPE html>
<html>
    <head>
        <title> 
        Signup
        </title>
    </head>

    <body>

    <style type="text/css">
	
	#text{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
	}

	#button{

		padding: 10px;
		width: 100px;
		color: white;
		background-color: lightblue;
		border: none;
	}

	#box{

		background-color: grey;
		margin: auto;
		width: 300px;
		padding: 20px;
	}

	</style>
       <div id="box">
           <form action="signup.php" method="post">
               <input type="text" name="user_name"> <br> <br>
               <input type="password" name="password"> <br> <br>
               <input type="submit" value="Signup"> <br> <br>
               <a href="login.php">click to log in </a>
               
           </form>
       </div>
    </body>
</html>