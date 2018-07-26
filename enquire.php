<!DOCTYPE html> 
<head> 
<title>Enquiry</title> 
 <link rel="stylesheet" type="text/css" href="index.css"> 
 <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
		<style>
		.row_style{
		margin-top:10px;
		}
		.container{
		
		}
		.aaa{
		margin-left:160px;
		margin-right:200px;
		}
		</style>
		<link rel="shortcut icon" href="favicon.ico">
</head>
 <body> 
 



 
 <div class="loader"></div>
 <div class="header">
    <div class="inner-header">
	<div class="logo"><img src="wts.jpg" alt="logo" style="padding-bottom:10px"></div>
	<div class="logo1">Water Tanker Buddy</div>
	<div class="header-link"><span class="glyphicon glyphicon-log-in"><a href="log.php"><font color="white">  Login(Govt.)</a></span></div>
	<div class="header-link"><span class="glyphicon glyphicon-phone"><a href="cont.php"><font color="white"> Contact Us</a></span></div>
	<div class="header-link"><span class="glyphicon glyphicon-bookmark"><a href="wtb.php"><font color="white"> About Us</font></a></span></div>
	<div class="header-link"><span class="glyphicon glyphicon-home"><a href="ind.php"><font color="white"> Home</font></a></span></div>
	</div>
	</div>
	<div class="container">
		<div class="row row_style">
			<div class="col-lg-16">
			<div class="aaa">
				<div class="panel panel-default" align="center">
                            <div class="panel-heading" align="center">
                                <h4><a href=enq.php>Enquiry</a></h4>
                            </div>
                            <div class="panel-body" align=center>
                                <div class="container">
                <div class="row">
                    <div class="col-lg-8">
					<form name="Registration" action="" method="post">
							<div class="form-group">
                                <label for="uin">uin</label>
                                <input type="text" class="form-control" placeholder="Enter Unique Identification Number" name="a2"  required/>
                            </div>
                            </form>
					</div>
                </div>
            </div>
                            </div>
                            <div class="panel-footer" align="center">
                                
							<!--<button  onclick="myFunction" type="submit" value="Submit" class="btn btn-primary btn-block ">Submit</button>
							  
							  

<script>
function myFunction() {
    alert("Submitted Successfully");
}
</script>-->
				
							<button ><a href="submit.php">Submit</button></a>	
								
								
                            </div>
                        </div>
						</div>
			</div>
		</div>
	</div>
	</div>
	<div class="footer" style="margin-top:260px">
	<p>Copyright © Government of Rajasthan | All Rights Reserved | Contact Us: +91 90000 00000”.</p>
	</div>
<?php
 $servername = "localhost";
$username = "root";
$password = "";
$dbname = "tanker";



// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$y=$_POST['a2'];
$sql = "INSERT INTO inquiry (inquiry)
VALUES ('$y')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
 ?>	
</body> 
</html>