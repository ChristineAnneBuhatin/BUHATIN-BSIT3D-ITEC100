<?php 
session_start();
require_once "config.php";  
?>
  
<!DOCTYPE html>
<head></head>
<title>Login</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<style type="text/css">
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
        height: 400px;
        margin-top:250px;
        width: 680px;
        border-top-left-radius: 30px;
        border-top-right-radius: 30px;
        border-bottom-left-radius: 30px;
        border-bottom-right-radius: 30px;
        }
   
        h1{
        color:black;
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
        background: orange;
        }

     </style>  
<body>
    <center> 
    <div id="main">
        <br>
        <h1>LOGIN</h1>
        <form action="" method="POST">

                <br><label>USERNAME:</label></br><input type="text" name="username" id="username" class="text" autocomplete="off"><br><hr>

                <br><label>PASSWORD:</label><br><input type="password" name="password" id="password" class="text" autocomplete="off"><br><hr>

                <button type="submit" value="verify" id="verify" name="verify">VERIFY</button>
                <br>

               <button  value="forget" id="forget" name="forget"><a href= "forget.php" value="Forget">Forget Password?</a></button>

               <?php 
               if(isset($_REQUEST['forget'])){

                    date_default_timezone_set('Asia/Manila');
                    $currentDate = date('Y-m-d H:i:s');
                    $currentDate_timestamp = strtotime($currentDate);
                            
                    $dt= $currentDate. ' ' . $currentDate_timestamp;
                    $dt1 = new mysqli('localhost','root','','act3');

                    $date_time="INSERT INTO event_log(activity,user_id,username) VALUES ('Forget Password','1','ADMIN')";
                     mysqli_query($dt1,$date_time);
                }

               ?>

        </form>

    </div>
</center>
</body>
</html>
<?php
if(isset($_REQUEST['verify'])){

    $username = $_POST['username'];
    $password = $_POST['password'];
    $data = "SELECT id, username, password FROM users WHERE username = ?";

  
    if(empty($_POST["username"])){
        echo "<script>alert('PLEASE ENTER A USERNAME');</script>";
    } else{
        $username = ($_POST["username"]);
    }
     
    if(empty($_POST["password"])){
        echo "<script>alert('PLEASE ENTER A PASSWORD');</script>";
    } else{
        $password = ($_POST["password"]);
    }
     
    if(empty($username1) && empty($password1)){ 
       
        if($meow = mysqli_prepare($link, $data)){ 
            mysqli_stmt_bind_param($meow, "s", $username2);
             
            $username2 = $username;
             
            if(mysqli_stmt_execute($meow)){ 
                mysqli_stmt_store_result($meow);
                 
                if(mysqli_stmt_num_rows($meow) == 1){ 
                    mysqli_stmt_bind_result($meow, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($meow)){
                        if(password_verify($password, $hashed_password)){

                            $_SESSION["verify"] = true;
                            $_SESSION["code_access"] = true;
                            
                            $_SESSION["id"] = $id;
                            header("location: verification.php");  

                            date_default_timezone_set('Asia/Manila');
                            $currentDate = date('Y-m-d H:i:s');
                            $currentDate_timestamp = strtotime($currentDate);
                            
                            $dt= $currentDate. ' ' . $currentDate_timestamp;
                            $dt1 = new mysqli('localhost','root','','act3');

                            $date_time="INSERT INTO event_log(activity,user_id,username) VALUES ('Get Verification Code','1','ADMIN')";
                                mysqli_query($dt1,$date_time);

                        } 
                        else{ 
                            echo "<script>alert('PASSWORD ERROR');</script>";
                        }
                    }
                } 
                else{ 
                    echo "<script>alert('USERNAME IS NOT EXIST');</script>";
                }
            } 
            else{
                echo "Oops! Something went wrong. Please try again later.";
            }
            mysqli_stmt_close($meow);
        }
    }
    mysqli_close($link);
}

?>