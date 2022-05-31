<?php include("path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/users.php"); 
guestOnly();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewpoint" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<!--  fontawsome	-->
	<script src="https://kit.fontawesome.com/064979104d.js" crossorigin="anonymous"></script>

	

	<!--  Google Font	-->
	<link href="https://fonts.googleapis.com/css?family=Candal|Noto+Sans&display=swap" rel="stylesheet">

	<!--  fontawsome	-->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">


	<title>Register</title>
</head>
<body>
<?php include(ROOT_PATH . "/app/includes/header.php") ?>
    
    <div class="auth-content">
        <form action="register.php" method="post">
			<h2 class="form-title" style="color: #9b59b6">Register</h2>

            <?php include(ROOT_PATH . "/app/helpers/formErrors.php") ?>

            <div>
                <label>Username</label>
                <input type="text" name="username" value="<?php echo $username; ?>" class="text-input">
            </div>

            <div>
                <label>Email</label>
               <input type="email" name="email" value="<?php echo $email; ?>" class="text-input">
            </div>

            <div>
                <label>Password</label>
                <input type="password" name="password" value="<?php echo $password; ?>" class="text-input">
            </div>

            <div>
                <label>Confirm Password</label>
                <input type="password" name="passwordConf" value="<?php echo $passwordConf; ?>" class="text-input">
            </div>

            <div>
                <button type="submit" name="register-btn" class="btn btn-big">Register</button>
            </div>
            <p>Or <a href="<?php echo BASE_URL . '/login.php' ?>">Sign In</a></p>

        </form>
    </div>


<!-- JQuery -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script> 


<!-- Script -->
<script type="text/javascript" src="assets/js/scripts.js"></script>

</body>
</html>