<?php 
session_start();
require_once "config.php";  
?>

 <?php 
               if(isset($_POST['out'])){

                    date_default_timezone_set('Asia/Manila');
                    $currentDate = date('Y-m-d H:i:s');
                    $currentDate_timestamp = strtotime($currentDate);
                            
                    $dt= $currentDate. ' ' . $currentDate_timestamp;
                    $dt1 = new mysqli('localhost','root','','act3');

                    $date_time="INSERT INTO event_log(activity,user_id,username) VALUES ('User Logged Out','1','ADMIN')";
                     mysqli_query($dt1,$date_time);
                }

?>
<!DOCTYPE html>
<html>
<head>
<title>Store</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<style type="text/css">
	body{
  	background-image:url('images/bg.jpg');
  	background-size: cover;
  	background-position: center;
	}
.btn{
 background-color: #4CAF50; 
  border: 1px solid green; 
  color: white; 
  padding: 10px 24px; 
  cursor: pointer;
  float: left; 
  width:250px;
  height: 50px;
  margin-left: 5px;
  border: 3px solid #73AD21;

}

.btn-group:after {
  content: "";
  clear: both;
  display: table;
}
.btn-group button:hover {
  background-color: #3e8e41;
}
	#top{
		color:#2E151B;
		background-color: brown;
		background-size: cover;
		text-indent: 37%;
		top: 50%;
   	    left: 50%;
   	    right: 50%;
		letter-spacing:3px;
	}
	#top1{
		color:#2E151B;
		text-indent: 42.5%;
		letter-spacing:3px;
	}
	.choices{
		width:250px;
		height: 100px;
		margin-left: 5px;
 	    border: 1px solid BLACK;

	}
	.price{
		width:250px;
		height: 650px;
		margin-left: 5px;
 	    border: 1px solid BLACK;

	}
	.bundlea{
		width:180px;
		height: 200px;
		position: absolute;
		left: 265px;
 	    border: 1px solid BLACK;
	}
	.bundleb{
		width:180px;
		height: 200px;
		position: absolute;
		top:300px;
		left: 265px;
 	    border: 1px solid BLACK;
	}
		.food1{
		width:250px;
		height: 150px;
		position: absolute;
		left: 455px;
		top:125px;
		border: 3px solid #dea071;
 	 
	}
		.food2{
		width:250px;
		height: 150px;
		position: absolute;
		left: 750px;
		top:125px;
		border: 3px solid #dea071;
 	  
	}

		.food3{
		width:250px;
		height: 150px;
		position:absolute;
		left: 1045px;
		top:125px;
		border: 3px solid #dea071;
 	  
 	}

 		.food4{
		width:250px;
		height: 150px;
		position:absolute;
		left: 1340px;
		top:125px;
		border: 3px solid #dea071;
 	   
 	}
 		.food5{
		width:250px;
		height: 150px;
		position:absolute;
		left: 1630px;
		top:125px;
		border: 3px solid #dea071;
 	 
 	}
		.food6{
		width:250px;
		height: 150px;
		position: absolute;
		left: 455px;
		top:300px;
		border: 3px solid #dea071;
 	 
	}
		.food7{
		width:250px;
		height: 150px;
		position: absolute;
		left: 750px;
		top:300px;
		border: 3px solid #dea071;
 	  
	}
		.food8{
		width:250px;
		height: 150px;
		position: absolute;
		left: 1045px;
		top:300px;
		border: 3px solid #dea071;
 	  
	}
		.food9{
		width:250px;
		height: 150px;
		position: absolute;
		left: 1340px;
		top:300px;
		border: 3px solid #dea071;
 	  
	}
		.food10{
		width:250px;
		height: 150px;
		position: absolute;
		left: 1630px;
		top:300px;
		border: 3px solid #dea071;
 	  
	}
		.food11{
		width:250px;
		height: 150px;
		position: absolute;
		left: 455px;
		top:475px;
		border: 3px solid #dea071;
 	 
	}
		.food12{
		width:250px;
		height: 150px;
		position: absolute;
		left: 750px;
		top:475px;
		border: 3px solid #dea071;
 	 
	}
		.food13{
		width:250px;
		height: 150px;
		position: absolute;
		left: 1045px;
		top:475px;
		border: 3px solid #dea071;
 	 
	}
		.food14{
		width:250px;
		height: 150px;
		position: absolute;
		left: 1340px;
		top:475px;
		border: 3px solid #dea071;
 	 
	}
		.food15{
		width:250px;
		height: 150px;
		position: absolute;
		left: 1630px;
		top:475px;
		border: 3px solid #dea071;
 	 
	}
		.food16{
		width:250px;
		height: 150px;
		position: absolute;
		left: 455px;
		top:650px;
		border: 3px solid #dea071;
 	 
	}
		.food17{
		width:250px;
		height: 150px;
		position: absolute;
		left: 750px;
		top:650px;
		border: 3px solid #dea071;
 	 
	}
		.food18{
		width:250px;
		height: 150px;
		position: absolute;
		left: 1045px;
		top:650px;
		border: 3px solid #dea071;
 	 
	}
		.food19{
		width:250px;
		height: 150px;
		position: absolute;
		left: 1340px;
		top:650px;
		border: 3px solid #dea071;
 	 
	}
		.food20{
		width:250px;
		height: 150px;
		position: absolute;
		left: 1630px;
		top:650px;
		border: 3px solid #dea071;
 	 
	}
</style>
</head>
<body>
	<div id="top">
			<H1>WyndHalm’s Pastries</H1>
			<div id="top1"><p>CAKES & DESSERTS</p></div>
	</div>
	<div class="bundlea">
			<p><b>Bundle A</b></p>
			<input type="checkbox" name="op1">
			<label for="op1">Devil's Cake</label>

			<br><input type="checkbox" name="op2">
			<label for="op2">Cream Puff</label>

			<br><input type="checkbox" name="op3">
			<label for="op3">Japanese Cake</label>

		</div>
		<div class="bundleb">

			<p><b>Bundle B</b></p>
			<input type="checkbox" name="ops1">
			<label for="ops1">Cupcake</label>

			<br><input type="checkbox" name="ops2">
			<label for="ops2">Cinnamon Roll</label>

			<br><input type="checkbox" name="ops3">
			<label for="ops3">Croissant</label>

	
		</div>

		<div class="choices"><!-- FOOD ORDER RADIO-->

			
			<p><b><h6>Food Order Choices</h6></b></p>
			<h5><input type="radio" name="opsy1">
			<label for="opsy1">Bundle A</label>

			<input type="radio" name="opsy2">
			<label for="opsy2">Bundle B</label></h5>
		</div>
		<div class="col-sm-1"><!--BOXES-->
			<div class="price">
			<form action="Store.php" method="post">	

			<label for="price" style="margin:8px;"><b>Price:</b></label>
			<input class=form-control" style="margin:5px;" type="text" name="price" autocomplete="off">

			<label for="quantity" style="margin:8px;"><b>Quantity:</b></label>
			<input class=form-control" style="margin:5px;" type="text" name="quantity" autocomplete="off">

			<label for="discm" style="margin:8px;"><b>Discount Amount:</b></label>
			<input class=form-control" style="margin:5px;" type="text" name="discm" autocomplete="off">

			<label for="discm1" style="margin:8px;"><b>Discounted Amount:</b></label>
			<input class=form-control" style="margin:5px;" type="text" name="discm1" autocomplete="off">

			<label for="totalb" style="margin:8px;"><b>Total Bills:</b></label>
			<input class=form-control" style="margin:5px;" type="text" name="totalb" autocomplete="off">

			<label for="totalq" style="margin:8px;"><b>Total Quantity:</b></label>
			<input class=form-control" style="margin:5px;" type="text" name="totalq" autocomplete="off">

			<label for="cash" style="margin:8px;"><b>Total Cash Given:</b></label>
			<input class=form-control" style="margin:5px;" type="text" name="cash" autocomplete="off">

			<label for="change"style="margin:8px;"><b>Change:</b></label>
			<input class=form-control" style="margin:5px;" type="text" name="change" autocomplete="off">

			<br><br>
		</form>
	</div>
		<div class="food1"> <!--Images-->

			<img src="images/f1.jpg" alt="Devil's Cake" width="250" height="150">
			<br><input type="checkbox" style="position: center; "name="fc1">
			<label for="fc1"><h6>Devil's Cake</h6></label>
		</div>
		<div class="food2">

			<img src="images/f2.jpg" alt="Cream Puff" width="250" height="150">
			<br><input type="checkbox" style="position:center;	"name="f2">
			<label for="f2""><h6>Cream Puff</h6></label>
		</div>
		<div class="food3">
			<img src="images/f3.jpg" alt="Japanese Cake" width="250" height="150">
			<br><input type="checkbox" style="position:center; "name="f3">
			<label for="f3""><h6>Japanese Cake</h6></label>
		</div>
		<div class="food4">
			<img src="images/f5.jpg" alt="Cupcake" width="250" height="150">
			<br><input type="checkbox" style="position:center; "name="f4">
			<label for="f4""><h6>Cinnamon Roll</h6></label>
		</div>
		<div class="food5">
			<img src="images/f6.jpg" alt="Cinnamon Roll" width="250" height="150">
			<br><input type="checkbox" style="position:center; "name="f5">
			<label for="f5""><h6>Cinnamon Roll</h6></label>
		</div>
		<div class="food6">
			<img src="images/f7.jpg" alt="Croissant" width="250" height="150">
			<br><input type="checkbox" style="position:center; "name="f6">
			<label for="f6""><h6>Croissant</h6></label>
		</div>
		<div class="food7">

			<img src="images/f1.jpg" alt="Devil's Cake" width="250" height="150">
			<br><input type="checkbox" style="position:center; "name="fc1">
			<label for="fc1"><h6>Devil's Cake</h6></label>
		</div>
		<div class="food8">

			<img src="images/f2.jpg" alt="Cream Puff" width="250" height="150">
			<br><input type="checkbox" style="position:center;" name="f2">
			<label for="f2""><h6>Cream Puff</h6></label>
		</div>
		<div class="food9">
			<img src="images/f3.jpg" alt="Japanese Cake" width="250" height="150">
			<br><input type="checkbox" style="position:center; "name="f3">
			<label for="f3""><h6>Japanese Cake</h6></label>
		</div>
		<div class="food10">
			<img src="images/f5.jpg" alt="Cupcake" width="250" height="150">
			<br><input type="checkbox" style="position:center;" name="f4">
			<label for="f4""><h6>Cinnamon Roll</h6></label>
		</div>
		<div class="food11">
			<img src="images/f6.jpg" alt="Cinnamon Roll" width="250" height="150">
			<br><input type="checkbox" style="position:center; "name="f5">
			<label for="f5""><h6>Cinnamon Roll</h6></label>
		</div>
		<div class="food12">
			<img src="images/f7.jpg" alt="Croissant" width="250" height="150">
			<br><input type="checkbox" style="position:center;" name="f6">
			<label for="f6""><h6>Croissant</h6></label>
		</div>
		<div class="food13">

			<img src="images/f1.jpg" alt="Devil's Cake" width="250" height="150">
			<br><input type="checkbox" style="position:center; "name="fc1">
			<label for="fc1"><h6>Devil's Cake</h6></label>
		</div>
		<div class="food14">

			<img src="images/f2.jpg" alt="Cream Puff" width="250" height="150">
			<br><input type="checkbox" style="position:center; "name="f2">
			<label for="f2""><h6>Cream Puff</h6></label>
		</div>
		<div class="food15">
			<img src="images/f3.jpg" alt="Japanese Cake" width="250" height="150">
			<br><input type="checkbox" style="position:center; "name="f3">
			<label for="f3""><h6>Japanese Cake</h6></label>
		</div>
		<div class="food16">
			<img src="images/f5.jpg" alt="Cupcake" width="250" height="150">
			<br><input type="checkbox" style="position:center; "name="f4">
			<label for="f4""><h6>Cinnamon Roll</h6></label>
		</div>
		<div class="food17">
			<img src="images/f6.jpg" alt="Cinnamon Roll" width="250" height="150">
			<br><input type="checkbox" style="position:center; "name="f5">
			<label for="f5""><h6>Cinnamon Roll</h6></label>
		</div>
		<div class="food18">
			<img src="images/f7.jpg" alt="Croissant" width="250" height="150">
			<br><input type="checkbox" style="position:center; "name="f6">
			<label for="f6""><h6>Croissant</h6></label>
		</div>
		<div class="food19">
			<img src="images/f6.jpg" alt="Cinnamon Roll" width="250" height="150">
			<br><input type="checkbox" style="position:center; "name="f5">
			<label for="f5""><h6>Cinnamon Roll</h6></label>
		</div>
		<div class="food20">
			<img src="images/f7.jpg" alt="Croissant" width="250" height="150">
			<br><input type="checkbox" style="position:center; "name="f6">
			<label for="f6""><h6>Croissant</h6></label>
		</div>

		<div class="row"><!--BUTTONS-->
				<div class="btn-group">
		
			<input class="btn btn-primary" type="submit" style="margin:5px;"name="calcu" value="Calculate">
			<input class="btn btn-primary" type="submit" style="margin:5px;" name="print" value="Print Transaction">
			<input class="btn btn-primary" type="submit" style="margin:5px;" name="remove" value="Remove Order">
			<input class="btn btn-primary" type="submit" style="margin:5px;" name="new" value="New">
			<a href="eventlog.php"><input class="btn btn-primary" type="submit" style="margin:5px;" name="event" id="event" value="Event Log"></a>
			<a href="login.php"><input class="btn btn-primary" type="submit" style="margin:5px;" name="out" id="out" value="Log Out"></a>


				</div>
		</div>

	</div>
</div>
</body>
</html>