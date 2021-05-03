<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<style type="text/css">
<style>
    #myFakeElement { color:red ; }

    body{
    background-image: url("images/bg.gif");
    background-size: cover;
    background-position: center;
    }
table, th, td {
    border: 2px solid black;
    border-collapse: collapse;
    padding: 15px;
  	text-align: center;
  	margin-left:150px;

}
 #main{

        background-color:#faedd4;
        font-size:15px;
        font-family: "Chalkduster", fantasy;
        font-size: 15px;
        text-align: left;
        letter-spacing:2px;
        height: 600px;
        margin-top:80px;
        margin-left:450px;
        width: 1000px;
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
        background: red;
        }
</style>
</head>
<body>
	<div id="main">
		<br>
<?php 
session_start();
require_once "config.php";  

$event = "SELECT * FROM event_log";
$result = $link->query($event);

if ($result->num_rows > 0) {
echo "<table><tr><th>EVENT ID</th><th>ACTIVITY</th><th>DATE AND TIME</th><th>USER ID</th><th>USERNAME</th></tr>";

 while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["event_id"]."</td><td>". $row["activity"]. "</td><td>" . $row["date_time"]. "</td><td>" . $row["user_id"]. "</td><td>" . $row["username"]. "</td><tr>";
    }
} else {
    echo "0 results";
}
$link->close();
?>

<br>
			<a href="store.php"><button type="submit" style="margin-left: 80px;" name="back" id="back" value="back">BACK TO STORE</button></a>
			
			<a href="login.php"><button type="submit" style="margin-left: 555px; "name="out" id="out" value="out">LOG OUT</button><BR></a>
			

 
<?php 

		if(isset($_REQUEST['out'])){ 
          
                    date_default_timezone_set('Asia/Manila');
                    $currentDate = date('Y-m-d H:i:s');
                    $currentDate_timestamp = strtotime($currentDate);
                            
                    $dt= $currentDate. ' ' . $currentDate_timestamp;
                    $dt1 = new mysqli('localhost','root','','act3');

                    $date_time="INSERT INTO event_log(activity,user_id,username) VALUES ('User Logged Out','1','ADMIN')";
                    mysqli_query($dt1,$date_time);
              }
           

		if(isset($_REQUEST['back'])){ 
        

                    date_default_timezone_set('Asia/Manila');
                    $currentDate = date('Y-m-d H:i:s');
                    $currentDate_timestamp = strtotime($currentDate);
                            
                    $dt= $currentDate. ' ' . $currentDate_timestamp;
                    $dt1 = new mysqli('localhost','root','','act3');

                    $date_time="INSERT INTO event_log(activity,user_id,username) VALUES ('User Returned to Store','1','ADMIN')";
                    mysqli_query($dt1,$date_time);
                }
         
?>

</div>   
</body>     
</html>
