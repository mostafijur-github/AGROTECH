<?php
    session_start();
?>

<!DOCTYPE HTML>

<html lang="en">
    <head>
        <title>Profile: <?php echo $_SESSION['Username']; ?></title>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="css/style-xlarge.css" />
        <link rel="stylesheet" href="css/indexFooter.css" />
        
    </head>

    <body class="subpage">

        <?php
            require 'menu.php';
        ?>

        <section id="post" class="wrapper bg-img">
            <div class="inner">
                <div class="container">
                <header>                  
                    <br>
                    <h2><?php echo $_SESSION['Name'];?></h2>
                    <h3><?php echo $_SESSION['Username'];?></h3>
                    <br>
                    <form method="post" action="Profile/updatePic.php" enctype="multipart/form-data">
                        <input type="file" name="profilePic" id="profilePic">
                        <br />
                        <div class="12u$">
                            <input type="submit" class="button special small" name="upload" value="Upload" />
                            <input type="submit" class="button special small" name="remove" value="Remove" />
                        </div>
                    </form>
                    <br />
                </header>
                <form method="post" action="Profile/updateProfile.php" style="float: left; margin-left: 30px;">
                    <div class="row uniform">
                        <div class="8u 12u$(xsmall)">
                            <input type="text" name="name" id="name" value="<?php echo $_SESSION['Name'];?>" placeholder="Full Name" required />
                        </div>
                        <div class="6u 12u$(xsmall)">
                            <input type="text" name="uname" id="uname" value="<?php echo $_SESSION['Username'];?>" placeholder="Username" required/>
                        </div>
                        <div class="6u 12u$(xsmall)">
                            <input type="email" name="email" id="email" value="<?php echo $_SESSION['Email'];?>" placeholder="Email" required/>
                        </div>
                        <br/>
                        
                        <div class="6u 12u$(xsmall)">
                            <h4>Which is Favorite?</h4>
                            <div class="select-wrapper">
                              <select name="section" id="section">
                                    <option value="Band">Reading</option>
                                    <option value="Drama">Writing</option>
                                    <option value="Dance">Dancing</option>
                                    <option value="Decoration">Singing</option>
                                    <option value="Other">Others</option>
                                </select>
                            </div>
                        </div>
                        <br />
                        <p>
                            <b>Education : </b>
                        </p>
                        <div class="6u 12u$(xsmall)">
                            <div class="select-wrapper">
                              <select name="section" id="section">
                                    <option value="Band">JSC</option>
                                    <option value="Drama">SSC</option>
                                    <option value="Dance">HSC</option>
                                    <option value="Decoration">Honors</option>
                                    <option value="Other">Others</option>
                                </select>
                            </div>
                        </div>
                        <br />
                        <p>
                            <b>Your Religion: </b>
                        </p>
                        <div class="6u 12u$(xsmall)">
                            <div class="select-wrapper">
                              <select name="section" id="section">
                                    <option value="Band">Islam</option>
                                    <option value="Drama">Hindu</option>
                                    <option value="Dance">Christian</option>
                                    <option value="Other">Others</option>
                                </select>
                            </div>
                        </div>
                        <br />
                        <div class="12u$">
                            <center>
                                <input type="submit" class = "button special" value="Update Profile" />
                            </center>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </section>
        
        <!-- Footer -->
        <?php require 'footer.php'; ?>

    </body>
</html>
