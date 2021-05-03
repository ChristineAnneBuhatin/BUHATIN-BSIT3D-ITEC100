<?php
require_once('config.php');
?>
<DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<style type="text/css">
	body{
  	background-image:url("images/bg.gif"); 
  	background-size: cover;
  	background-position: center;
	}
	.reg{
		background-color:#ebad98;
		margin-top:190px;
		margin-left:770;
		width: 450px;
		border: 3px solid gray;
		border-top-left-radius: 30px;
		border-top-right-radius: 30px;
		border-bottom-left-radius: 30px;
		border-bottom-right-radius: 30px;
	}
	.top{
		background-image:url('background.jpg');
		background-color: gray;
		width: 450px;
		text-align: center;
		height: 30px;
		margin-top:5px;
		left:700px;

	}
		.btn{
  background-color: #4CAF50; 
  border: 1px solid green; 
  color: white; 
  cursor: pointer;
  margin-left: 80px;
  border: 3px solid #73AD21;

}

.btn-group button:hover {
  background-color: #3e8e41;
}
	.buttons{
    padding: 10px 15px; 
    cursor: pointer;
 	width:720px;
	}
	</style>
</head>
<body>
	<div>
		<?php
		if (isset($_POST['create'])){
			$firstname=  $_POST['firstname'];
			$lastname=   $_POST['lastname'];
			$password=	 $_POST['password'];
			$conpass=    $_POST['conpass'];
			$email=      $_POST['email'];


		
			if($password==$conpass){
				
			$sql = "INSERT INTO userdata(User_Firstname,User_Lastname,User_Email,User_Pass) Values (?,?,?,?)";
			$stmtinsert = $link->prepare($sql);
			$result = $stmtinsert->execute([$firstname, $lastname, $email, $conpass]);
				if($result){
				echo '<script>alert("SUCCESSFULLY REGISTERED")</script>'; 
			}
		}
		else {
			echo '<script>alert("PASSWORD AND CONFIRM PASSWORD DOES NOT MATCH")</script>'; 
		}
	}


	?>

</div>
	<div class="reg">
		<form action="Registration.php" method="post">
			<div class="container">
				<div class="row">
				<h1>REGISTRATION</></h1>
				<P><div class ="top"><b>PLEASE FILL OUT THE FORM</b></P></div>

				
				<LABEL for="firstname"><b>First Name:</b></LABEL>
				<input class="form-control" style="margin-top:5px; width: 410px; margin-left: 15px;" type="text" id="firstname" name="firstname" autocomplete="off" required>

				<LABEL for="lastname"><b>Last Name:</b></LABEL>
				<input class="form-control"  style="margin-top:5px; width: 410px; margin-left: 15px;" type="text" id="lastname" name="lastname" autocomplete="off" required>

				<LABEL for="email"><b>Email:</b></LABEL>
				<input class="form-control"  style="margin-top:5px; width: 410px; margin-left: 15px;" type="email" id="email" name="email" required>

				<LABEL for="password"><b>Password:</b></LABEL>
				<input class="form-control"  style="margin-top:5px; width: 410px; margin-left: 15px;" type="password" id="password" name="password" autocomplete="off" required>

				<LABEL for="conpass"><b>Confirm Password:</b></LABEL>
				<input class="form-control"  style="margin-top:5px; width: 410px; margin-left: 15px;" type="password" id="conpass" name="conpass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@_!#$%^&*()<>?/|}{~:]).{8,}" title="Must contain at least one number, one uppercase, one lowercase letter, one special character and at least 8 or more characters" autocomplete="off" required>
				

				<BR>
				<a href= "forget.php" value="Forget"><input class="btn btn-primary" style="margin-top:5px; margin-left:90px; width: 250px; height: 50px"type="submit" id="register" name="create" value="Sign Up"></a>

				</div>
			</div>
		</div>
	</form>
	</div>
</body>
</html>