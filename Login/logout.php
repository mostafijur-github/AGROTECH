<?php
	session_start();
		$_SESSION['logged_in'] = false;
	session_unset();
	session_destroy();
?>

<!DOCTYPE html>
<html>
	<head>
        <title>AGROTECH FarmersPortal: LogOut</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="../bootstrap/js/bootstrap.min.js"></script>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<script src="../bootstrap/js/bootstrap.min.js"></script>
        <script src="../js/jquery.min.js"></script>
		<script src="../js/skel.min.js"></script>
		<script src="../js/skel-layers.min.js"></script>
		<script src="../js/init.js"></script>
		<link rel="stylesheet" href="../css/style.css" />
		<link rel="stylesheet" href="../css/style-xlarge.css" />
        <link rel="stylesheet" href="../css/indexFooter.css" />
    </head>

	<body>
	   <?php
            require 'menu.php';
        ?>
	    <section id="banner">
			<div class="container">
                <header class="major">
                    <h2>Thanks for visiting !!!</h2>
					<center>
                    	<p>You have been succesfully logged out !!!</p>
                        <div class="6u 12u$(xsmall)">
							<br />
                            <a href="../index.php" class="button special">HOME</a>
                        </div>
                    </center>
                </header>
                </div>
            </div>
        </section>

		<!-- Footer -->
		<?php require '../footer.php'; ?>

	</body>
</html>
