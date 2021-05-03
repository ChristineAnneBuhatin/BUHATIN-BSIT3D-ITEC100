<?php
session_start();
 
require_once "config.php";
 
$new_password = $new_password1 = "";
$confirm_new_password = $confirm_new_password1 = "";
 
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    if(empty(trim($_POST["new_password"]))){
        $confirm_new_password = "Please enter the new password.";     
    } elseif(strlen(trim($_POST["new_password"])) < 6){
        $confirm_new_password = "Password must have atleast 6 characters.";
    } else{
        $new_password = trim($_POST["new_password"]);
    }
    
    if(empty(trim($_POST["new_password1"]))){
        $confirm_new_password1 = "Please confirm the password.";
    } else{
        $new_password1 = trim($_POST["new_password1"]);
        if(empty($confirm_new_password) && ($new_password != $new_password1)){
            $confirm_new_password1 = "Password did not match.";
        }
    }
        
    if(empty($confirm_new_password) && empty($confirm_new_password1)){

        $sql = "UPDATE users SET password = ? WHERE id = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            mysqli_stmt_bind_param($stmt, "si", $param_password, $param_id);
            
   
            $param_password = password_hash($new_password, PASSWORD_DEFAULT);
            $param_id = $_SESSION["id"];

                    date_default_timezone_set('Asia/Manila');
                    $currentDate = date('Y-m-d H:i:s');
                    $currentDate_timestamp = strtotime($currentDate);
                            
                    $dt= $currentDate. ' ' . $currentDate_timestamp;
                    $dt1 = new mysqli('localhost','root','','act3');

                    $date_time="INSERT INTO event_log(activity,user_id,username) VALUES ('Password Changed','1','ADMIN')";
                     mysqli_query($dt1,$date_time);
            
           
            if(mysqli_stmt_execute($stmt)){
            
                session_destroy();
                header("location: login.php");
                exit();
            } else{
                 echo "Oops! Something went wrong. Please try again later.";
            }

            mysqli_stmt_close($stmt);
        }
    }

    mysqli_close($link);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Forget Password</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   <style>
      #myFakeElement { color:red ; }
    body{
    background-image: url("images/bg.gif");
    background-size: cover;

    background-position: center;
    }

        #main{

        background-color:#ebad98;
        font-size:15px;
        font-family: "Chalkduster", fantasy;
        font-weight:bold;
        letter-spacing:2px;
        height: 485px;
        margin-top:190px;
        width: 680px;
        border-top-left-radius: 30px;
        border-top-right-radius: 30px;
        border-bottom-left-radius: 30px;
        border-bottom-right-radius: 30px;
        }
   
        h1{
        color:BLACK;
        }

        .text{
        font-family: "Chalkduster", fantasy;
        background-color: #black;
        color:black;
        width: 250px;
        font-size: 25px;
        border:none;
        }

        hr{
        width: 250px;
        margin-top: 0px !important;
        }

        button {
        background: cornflowerblue;
        color: white;
        border: none;
        padding: 10px;
        border-radius: 8px;
        font-family: 'Lato';
        margin: 5px;
       text-transform: uppercase;
       cursor: pointer;
       font-family: "Chalkduster", fantasy;
       outline: none;
        }

        button:hover {
        background: red;
        }
     </style>  
</head>
<body>
   <center>
    <div id="main">
        <BR>
        <h1>FORGET PASS</h1>
        <p>Please fill out this form to reset your password.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"> 
            <div class="form-group">

                 <br><label>USERNAME:</label></br><input type="text" name="username" id="username" class="text" autocomplete="off"><br><hr>

                <label>NEW PASSWORD</label>
                <input style="width: 257px;" type="password" name="new_password" class="form-control <?php echo (!empty($confirm_new_password)) ? 'is-invalid' : ''; ?>" value="<?php echo $new_password; ?>">
                <span class="invalid-feedback"><?php echo $confirm_new_password; ?></span>
            </div>
            <div class="form-group">
                <label>CONFIRM NEW PASSWORD</label>
                <input style="width: 257px;" type="password" name="new_password1" class="form-control <?php echo (!empty($confirm_new_password1)) ? 'is-invalid' : ''; ?>">
                <span class="invalid-feedback"><?php echo $confirm_new_password1; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <a type="submit" class="btn btn-warning" href="login.php">Cancel</a>
            </div>
        </form>
    </div>    
</body>
</html>