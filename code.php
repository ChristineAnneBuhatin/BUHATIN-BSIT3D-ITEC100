<?php 
session_start();
require_once "config.php";
    if(!isset($_SESSION["code_access"]) || $_SESSION["code_access"] !== true){
        header("location: login.php");
        exit;
    }else{
   

        $CODE123 =rand(100000,999999);

        $duration = floor(time()/(60*5));
        srand($duration);
        $_SESSION["codee"] = substr(str_shuffle($CODE123), 0, 6);
                
        date_default_timezone_set('Asia/Manila');

        $currentDate = date(' Y-m-d H:i:s');
        $currentDate_timestamp = strtotime($currentDate);
        $endDate_months = strtotime("+5 minutes", $currentDate_timestamp);
        $packageEndDate = date(' Y-m-d H:i:s', $endDate_months);
            
        $_SESSION["current"] = $currentDate;
        $_SESSION["expired"] = $packageEndDate;

        $user_id = $_SESSION["id"];
        $codee = $_SESSION["codee"];
        

        $sql = "INSERT INTO code (user_id, code, created_at, expiration) VALUES('$user_id', '$codee', '$currentDate', '$packageEndDate')";
        
        $result = mysqli_query($link,"select * from code where code='$codee'") or die('Error connecting to MySQL server');
        $count = mysqli_num_rows($result);
        if($count == 0)
        {
            if(mysqli_query($link, $sql)){
               
            } else{
            echo "ERROR: $sql. " . mysqli_error($link);
            }
        }else{
       
        }

        
    }
?>
<!DOCTYPE html>
<html lang="en">
<head></head>
<title>CODE</title>
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

        background-color:#ed9ae1;
        font-size:15px;
        font-family: "fantasy";
        font-weight:bold;
        font-size: 30px;
        text-align: center;
        letter-spacing:2px;
        height: 360px;
        margin-top:250px;
        margin-left:630px;
        width: 700px;
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
        margin: 5px;
       text-transform: uppercase;
       cursor: pointer;
       outline: none;
        }

        button:hover {
        background: orange;
        }

</style>


<body>

    <div id="main">
 
        
        
    <div id="text">
            <?php 

            echo $_SESSION["codee"];
            

            ?>     
        </div>
<BR>
            <?php 

            
            echo "The current time and date is: " .date(" F j, Y h:i:s A");

          
            ?>     
<BR>
            <?php 

           
            echo "The expiration time and date: " .$_SESSION["expired"];

            ?>  
            <BR>  
        <button type="submit" name="login" onclick="self.close()">CLOSE WINDOW</button><BR>
        </div> 
        
 
</body>
</html>  