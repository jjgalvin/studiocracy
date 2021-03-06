                                <?php
	//Start a PHP session
	session_start();
	
	//Check to see if user is already logged in
	if (!isset($_SESSION['sid']))
	{
		header("Location: index.php?lerror=3");
		exit;
	}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="robots" content="noindex,nofollow" />
		<title>Studiocracy</title>
		<link rel='icon' type='image/png' href='favicon.png'>
		<link rel="shortcut icon" type="image/ico" href="favicon.ico" />
		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="css/colorbox.css">
		<script src="js/script.js"></script>
        	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        	<script src="js/jquery.colorbox.js"></script>
		<script>
			$(document).ready(function(){
				$(".art").colorbox({rel:'art'});
				$(".pic").colorbox({rel:'pic'});
				$(".youtube").colorbox({iframe:true, innerWidth:640, innerHeight:390});
				$(".iframe").colorbox({iframe:true, width:"80%", height:"80%"});
				$("a.inline").colorbox({inline:true});
			});
		</script>
	</head>

	<body>
			
		<div id="top">
			<?php
			if (isset($_GET['login'])) {
				if($_GET['login'] == 1)
					echo '<p style="font-size:20px;margin:0px;background:green;">User Logged in as ' . $_SESSION['fname'] . " " . $_SESSION['lname'] . '</p>';
			}?>
			<table>
				<tr>
					<td style="width:30%"><a class="title" href="home.php">Studiocracy</a></td>
					<td style="width:35%"><form action="http://www.google.com/search" method="get"><input type="search" name="q" size="35" onblur="value=''" placeholder="Search"/></form></td>
					<td style="width:35%"><a href="profile.php"><?php echo $_SESSION['fname'] . " " . $_SESSION['lname']; ?></a> | <a class="iframe" href="cart.php">Cart</a> | <a href="logout.php">Logout</a></td>
					</tr>
			</table>
		</div>
				
		<div id="listing">
			<strong>Welcome to your gallery.</strong>
			<p>Buy art directly from artists at any price range.<br />Build your network and discover rising talent near you.</p>
			<a href="createListing.php"><input type="button" value="Create a Listing!" /></a>
		</div>
		
		<div id="nav">
			<a href="#"><img src="img/buy.png" alt="" /></a>
			<a href="#"><img src="img/sell.png" alt=""/></a>
			<a href="#"><img src="img/meet.png" alt=""/></a>
		</div>

		<div id="slide">
		<strong style="color:white">Featured Art</strong>
		<iframe scrolling="no"  src="galleryview/galleryview.html">
			<p>Your browser does not support iframes.</p>
		</iframe>
		</div>
		
		<div id="featArtist">
			<strong>Featured Artists</strong>
			<table id="artist">
				<tr>
					<td><a class="pic" href="img/artist1.png"><img src="img/artist1.png" alt=""/></a></td>
					<td><a class="pic" href="img/artist2.png"><img src="img/artist2.png" alt=""/></a></td>
					<td><a class="pic" href="img/artist3.png"><img src="img/artist3.png" alt=""/></a></td>
				</tr>
				<tr>
					<td>Janet Blumenthal</td>
					<td>Dave Venell</td>
					<td>Susan Q. Bryrd</td>
				</tr>
				<tr>
					<td>#7 Painter in</td>
					<td>#12 Sculptor in</td>
					<td>#3 Photographer in</td>
				</tr>
				<tr>
					<td>Arizona</td>
					<td>Colorado</td>
					<td>California</td>
				</tr>
			</table>
		</div>
		
		<footer>
			<p>&copy; 2014, Studiocracy</p>
		</footer>

	</body>
</html>
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            