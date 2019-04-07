<?php
	require 'dbconfig/config.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>Comments Page</title>
<link rel="stylesheet" href="css/style1.css">
</head>
<body style="background-color:#bdc3c7">
	
	<div id="main-wrapper">
		<center>
			<h2>Registration Form</h2>
			<img src="imgs/avatar.jpg" class="avatar"/>
		</center>
	
		<form class="myform" action="comments.php"method="post">
		
			<label><b>Enter Your Name</b></label><br>
			<input name="fullname" type="text" class="inputvalues" placeholder="Type your Name " required/><br>
			
			<label><b>Enter Comments</b></label><br>
			<input name="comments" type="text" class="inputvalues" placeholder="Type your Comments " required/><br>
			
			
			<input name="submit_btn" type="submit" id="signup_btn" value="Submit Comments"/><br>
			<a href="index.php"><input type="button" id="back_btn" value="Back"/></a>
		</form>
		
		<?php
			if(isset($_POST['submit_btn']))
			{
				//echo '<script type="text/javascript"> alert("Sign Up button clicked") </script>';
				
				$fullname = $_POST['fullname'];
				$comments = $_POST['comments'];
				
				
				
				$query= "insert into commenttable values('$fullname','$comments')";
				$query_run = mysqli_query($con,$query);
						
						if($query_run)
						{
							
							echo '<script type="text/javascript"> alert("Comments submitted successfully") </script>';
						}
						else
						{
							echo '<script type="text/javascript"> alert("Error!") </script>';
						}		
			}
		?>
	</div>
		
	<div>
	
	<center>
		
		<?php
		$query="select * from commenttable";
		$query_run = mysqli_query($con,$query);
		
		if ($query_run->num_rows > 0) {
    // output data of each row
    while($row = $query_run->fetch_assoc()) {
        echo "Name: " . $row["fullname"]. " - Comments: " . $row["comments"]."<br>";
				}
			} else {
			echo "0 results";
		}
	
		?>
	
			
			

	</center>
		
	</div>
</body>
</html>