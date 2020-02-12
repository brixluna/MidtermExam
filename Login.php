<?php

$host="localhost";
$user="root"";
$password="";
$db="user"";

mysql_connect($host,$user,$password);
mysql_select_db($db);
if(isset([$_POST'username'])){
	
	$uname=$_POST['username'];
	$password=$_POST['password'];


	$sql="select * from loginform where user='".$uname."' and Pass='".$password."'limit 1";

	$result=mysql_query($sql);

	if(mysql_num_rowa($result)==1){
	  echo"You have successfully Logged in";
	  exit();

}
else{
	echo"You have enter Incorrect Password";
	exit();
}
}
?>

<!DOCTYPE html>
<html>
    <head>
    	
      <link rel="stylesheet" a href="css\style.css"/>
      <link rel="stylesheet" a href="css\https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    </head>
    <body>
    	<div class="container">

    		<form method="POST" action="#">
    			<div class="form_input">
    			<input type+"text" name="username" placeholder="Enter your username"/>
    		</div>
    		<div class="form_input">
    			<input type+"text" name="password" placeholder="Enter your password"/>
    		</div>
    		<input type+"submit" name="submit" value="LOGIN" class="btn_login"/>

    	</form>

    </div>

</body>
</html>
