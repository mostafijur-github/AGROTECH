<?php
	if(isset($_SESSION['logged_in']) AND $_SESSION['logged_in'] == 1)
	{
		$loginProfile = "My Profile: ". $_SESSION['Username'];
		$logo = "glyphicon glyphicon-user";
		if($_SESSION['Category']!= 1)
		{
			$link = "Login/profile.php";
		}
		else {
				$link = "profileView.php";
		}
	}
	else
	{
		$loginProfile = "Login";
		$link = "index.php";
		$logo = "glyphicon glyphicon-log-in";
	}
?>

<!DOCTYPE html>
<html>
	<body>
		<header id="header">
			<h1><a href="index.php">FarmersPortal</a></h1>
			<nav id="nav">
				<ul>
					<li><a href="index.php"><span class="fa fa-home"></span> Home</a></li>
					<li><a href="myCart.php"><span class="fa fa-shopping-cart"> MyCart</a></li>
					<li><a href="<?= $link; ?>"><span class="<?php echo $logo; ?>"></span><?php echo" ". $loginProfile; ?></a></li>
					<li><a href="blogView.php"><span class="fa fa-comment"> BLOG</a></li>
					<li><a href="market.php"><span class="fa fa-market-place"> Digital-Market</a></li>
					<li><a href="contact_us.php"><span class="fa fa-contact-list"> Contact Us</a></li>
				</ul>
			</nav>
		</header>
	</body>
</html>
