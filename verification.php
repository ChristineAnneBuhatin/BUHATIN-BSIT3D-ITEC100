<?php 

session_start(); 

if(!isset($_SESSION["verify"]) || $_SESSION["verify"] !== true){
    header("location: login.php");
    exit;
}
 require_once "config.php";
 ?>

<?php
$code_err = "";
$_SESSION["code_access"] = true;



if(isset($_POST['login']))
{ 
    if(empty(trim($_POST["code"]))){
        echo "<script>alert('PLEASE ENTER CODE');</script>";
    } else{ 

        date_default_timezone_set('Asia/Manila');
        $currentDate = date('Y-m-d H:i:s');
        $currentDate_timestamp = strtotime($currentDate);
        $code = $_POST['code'];
        

        $id_code = mysqli_query($link,"SELECT * FROM code WHERE code='$code' AND id_code=id_code") or die('Error connecting to MySQL server');
        $count = mysqli_num_rows($id_code);

        $servername = 'localhost';
        $username = 'root';
        $password = '';
        $dbname = 'act3';

        $conn = new mysqli($servername, $username, $password, $dbname);
        
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT expiration FROM code where code='$code'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            
            while($row = $result->fetch_assoc()) {
                echo "<div style='display: none;'>"."Expiration: " . $row["expiration"]. "<br>";
                echo $currentDate."<br></div>";
                if(($row["expiration"]) >($currentDate)){

                    $_SESSION["loggedin"] = true;
                    $_SESSION["id"] = $id;
                    $_SESSION["username"] = $username;                            
                    header("location: store.php");

                if(isset($_REQUEST['login'])){

                    date_default_timezone_set('Asia/Manila');
                    $currentDate = date('Y-m-d H:i:s');
                    $currentDate_timestamp = strtotime($currentDate);
                            
                    $dt= $currentDate. ' ' . $currentDate_timestamp;
                    $dt1 = new mysqli('localhost','root','','act3');

                    $date_time="INSERT INTO event_log(activity,user_id,username) VALUES ('User Logged In','1','ADMIN')";
                    mysqli_query($dt1,$date_time);
                }


                }
                else{
                    echo "<script>alert('EXPIRED CODE ERROR');</script>";
                }
            }
          } else {
            echo "<script>alert('WRONG CODE ERROR');</script>";
          }

          $conn->close();
    }
    
    mysqli_close($link);
}

?>
  
<!DOCTYPE html>
<html lang="en">
<head></head>
<title>Verification</title>
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

        background-color:pink;
        font-size:15px;
        font-family: "Chalkduster", fantasy;
        font-weight:bold;
        font-size: 30px;
        text-align: center;
        letter-spacing:2px;
        height: 300px;
        margin-top:260px;
        margin-left:720px;
        width: 500px;
        border-top-left-radius: 30px;
        border-top-right-radius: 30px;
        border-bottom-left-radius: 30px;
        border-bottom-right-radius: 30px;
        }
         button {
        background: cornflowerblue;
        color: white;
        border: none;
        padding: 8px;
        border-radius: 8px;
        font-family: 'Lato';
        font-size: 20px;
        margin: 5px;
        text-transform: uppercase;
        cursor: pointer;
        outline: none;
        }

        button:hover {
        background: orange;
        }
        label{
        font-size: 20px;
        }
        a{
        font-size: 15px;  
        }

</style>
<body>
    
    <div id="main">
        <br>
        <h1>Verification</h1>
      
        <form role="form" method="post">

                <div class="form-group">
                    <label>Code:</label>
                    <input type="text" name="code" maxlength="6" size="15"" >
                   
                </div>
                <div class="form-group">
                    <button type="submit" name="login">LOGIN</button><BR>
                    <a class="" style=" color: green;" href="code.php" target="_blank">Get your verification code here!</a>
                </div>           
        </form>
</body>
</html>


