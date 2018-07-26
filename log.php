<html>
<head> 
<title>Login(Govt. only)</title> 
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

 <?php 
	require('conn.php');
	session_start();
    if (isset($_POST['username'])){
		
		$username = $_REQUEST['username'];
		$username = mysqli_real_escape_string($con,$username); 
		$password = $_REQUEST['password'];
		$password = mysqli_real_escape_string($con,$password);
		
        $query = "SELECT * FROM `govt` WHERE username='$username' and password='$password'";
		$result = mysqli_query($con,$query) or die(mysql_error());
		$rows = mysqli_num_rows($result);
		if($rows){
			$_SESSION['username'] = $username;
			header("Location: dash.php");
			
            }else{
				echo "<h3>Username/password is incorrect.</h3><br/>Click here to <a href='signin.php'>Sign in</a>";
				}
    }else{
?>
<body> 
 <form action="" method="post" name="Sign in" >
 <div class="loader"></div>
 <div class="header">
    <div class="inner-header">
	<div class="logo"><img src="wts.jpg" alt="logo" style="padding-bottom:10px"></div>
	<div class="logo1">Water Tanker Buddy</div>
	<div class="header-link"><span class="glyphicon glyphicon-question-sign"><a href="enq.php"><font color="white">  Enquiry</a></span></div>
	<div class="header-link"><span class="glyphicon glyphicon-phone"><a href="cont.php"><font color="white"> Contact Us</a></span></div>
	<div class="header-link"><span class="glyphicon glyphicon-bookmark"><a href="wtb.php"><font color="white"> About Us</font></a></span></div>
	</div>
	</div>
	<div class="container">
		<div class="row row_style">
			<div class="col-lg-16">
			<div class="aaa">
				<div class="panel panel-default" align="center">
                            <div class="panel-heading" align="center">
                                <h4><a href=log.php>Login (Govt. Only)</a></h4>
                            </div>
                            <div class="panel-body" align=center>
                                <div class="container">
                <div class="row">
                    <div class="col-lg-8">
					<form name="Registration" action="" method="post">
							<div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" placeholder="username" name="username"  required/>
                            </div>
							<div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" placeholder="password" name="password"  required/>
                            </div>
                            </form>
					</div>
                </div>
            </div>
                            </div>
                            <div class="panel-footer" align="center">
                                <button type="submit" value="Submit" class="btn btn-primary ">Login</button>
								<button type="reset" value="Reset" class="btn btn-primary ">Reset</button>
                            </div>
                        </div>
						</div>
			</div>
		</div>
	</div>
	</div>
	<div class="footer" style="margin-top:190px">
	<p>Copyright © Government of Rajasthan | All Rights Reserved | Contact Us: +91 90000 00000”.</p>
	</div>
	</form>
	<?php } ?>
</body> 
</html>
