<?php
	session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title></title>
<link href='http://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Abel|Satisfy' rel='stylesheet' type='text/css' />
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<div id="wrapper">
	<div id="header-wrapper">
          
		<div id="header" class="container">
            
            
         <div id="logo">
				<h1><a href="#">Leo Messi</a></h1>
			</div>
           
        <div class="session">
             
           <h3>Welcome
				<?php echo $_SESSION['username'] ?>
			</h3>
         
        </div>  
			<div id="menu">
				<ul>
					<li class="current_page_item"><a href="#">Homepage</a></li>
					<li><a href="#featured1-content">Profile</a></li>
					<li><a href="#sidebar">Awards</a></li>
					<li><a href="comments.php">Comments</a></li>
				<li><form class="myform" action="home.php" method="post">
			<input name="logout" type="submit" id="logout_btn" value="Log Out"/>
			
		</form>  
		
		<?php
			if(isset($_POST['logout']))
			{
				session_destroy();
				header('location:index.php');
			}
		?>
		</li>
				</ul>
			</div> 
           
		</div>
        
        
         
		<div id="banner">
			<div class="content"><img src="images/banner.jpg" width="1000" height="600" alt="" /></div>
		</div>
	</div>
	<!-- end #header -->
	<div id="featured1-content">
		<div id="column1">
			<h2>La Liga</h2>
			<p><img src="images/img006.jpg" width="300" height="150" alt="" /></p>
			<p>Etiam non felis. Donec ut ante. In id eros. Suspendisse lacus turpis, cursus egestas at sem. Mauris quam enim, molestie.</p>
			<p class="button"><a href="#">Read More</a></p>
		</div>
		<div id="column2">
			<h2>Barcelona</h2>
			<p><img src="images/img007.jpg" width="300" height="150" alt="" /></p>
			<p>Etiam non felis. Donec ut ante. In id eros. Suspendisse lacus turpis, cursus egestas at sem. Mauris quam enim, molestie.</p>
			<p class="button"><a href="#">Read More</a></p>
		</div>
		<div id="column3">
			<h2>Champions League</h2>
			<p><img src="images/img008.jpg" width="300" height="150" alt="" /></p>
			<p>Etiam non felis. Donec ut ante. In id eros. Suspendisse lacus turpis, cursus egestas at sem. Mauris quam enim, molestie.</p>
			<p class="button"><a href="#">Read More</a></p>
		</div>
	</div>
	<div id="page">
		<div id="content">
			<div class="post">
				<h2 class="title"><a href="#">Welcome to Barclays Premiere </a></h2>
				<div class="entry">
					<p>This is <strong>ColoreGiallo</strong>, a free, fully standards-compliant CSS template designed by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>.   The photos in this template are from <a href="http://fotogrph.com/"> Fotogrph</a>. This free template is released under the <a href="http://templated.co/license">Creative Commons Attribution</a> license, so you're pretty much free to do whatever you want with it (even use it commercially) provided you give us credit for it. Have fun :) </p>
					<p class="links"><a href="#" class="more">Read More</a><a href="#" title="b0x" class="comments">Comments</a></p>
				</div>
			</div>
		</div>
		<!-- end #content -->
		<div id="sidebar">
			<ul>
				<li>
					<h2>Categories</h2>
					<ul>
						<li><a href="#">Aliquam libero</a></li>
						<li><a href="#">Consectetuer adipiscing elit</a></li>
						<li><a href="#">Metus aliquam pellentesque</a></li>
						<li><a href="#">Suspendisse iaculis mauris</a></li>
						<li><a href="#">Urnanet non molestie semper</a></li>
						<li><a href="#">Proin gravida orci porttitor</a></li>
					</ul>
				</li>
			</ul>
		</div>
		<!-- end #sidebar -->
		<div style="clear: both;">&nbsp;</div>
	</div>
	<!-- end #page --> 
</div>




<div id="footer-content-wrapper">
	<div id="footer-content">
		<div id="fbox1">
			<h2>Fusce ultrices fringilla</h2>
			<ul class="style1">
				<li class="first"><a href="#">Maecenas luctus lectus at sapien</a></li>
				<li><a href="#">Etiam rhoncus volutpat erat</a></li>
				<li><a href="#">Etiam posuere augue sit amet nisl</a></li>
				<li><a href="#">Mauris vulputate dolor sit amet nibh</a></li>
				<li><a href="#">Etiam posuere augue sit amet nisl</a></li>
			</ul>
		</div>
		<div id="fbox2">
			<h2>Nulla luctus eleifend</h2>
			<ul class="style1">
				<li class="first"><a href="#">Maecenas luctus lectus at sapien</a></li>
				<li><a href="#">Etiam rhoncus volutpat erat</a></li>
				<li><a href="#">Etiam posuere augue sit amet nisl</a></li>
				<li><a href="#">Mauris vulputate dolor sit amet nibh</a></li>
				<li><a href="#">Etiam posuere augue sit amet nisl</a></li>
			</ul>
		</div>
		<div id="fbox3">
			<h2>Maecenas luctus lectus</h2>
			<ul class="style1">
				<li class="first"><a href="#">Maecenas luctus lectus at sapien</a></li>
				<li><a href="#">Etiam rhoncus volutpat erat</a></li>
				<li><a href="#">Etiam posuere augue sit amet nisl</a></li>
				<li><a href="#">Mauris vulputate dolor sit amet nibh</a></li>
				<li><a href="#">Etiam posuere augue sit amet nisl</a></li>
			</ul>
		</div>
	</div>
</div>
<div id="footer">
</div>
<!-- end #footer -->
</body>
</html>
