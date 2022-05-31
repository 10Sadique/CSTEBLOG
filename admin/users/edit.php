<?php include("../../path.php"); ?>
<?php include(ROOT_PATH . '/app/controllers/users.php');
adminOnly();
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
        <link rel="stylesheet" type="text/css" href="../../assets/css/style.css">

	<!--  fontawsome	-->
    <link rel="stylesheet" type="text/css" href="../../assets/css/admin.css">
    

	<title>Admin Section-Edit User</title>
</head>
<body>
    
<?php include(ROOT_PATH . "/app/includes/adminHeader.php"); ?>

<!--Admin page-wrapper -->
	<div class="admin-wrapper">
        <!-- Left Sidebar -->

<?php include(ROOT_PATH . "/app/includes/adminSidebar.php"); ?>

        <!-- //left Sidebar -->

        <!-- Admin Content -->

        <div class="admin-content">
            <div class="button-group">
                <a href="create.php" class="btn btn-big">Add User</a>
                <a href="index.php" class="btn btn-big">Manage Users</a>
            </div>

            <div class="content">
                <h2 class="page-title">Edit User</h2>
                <?php include(ROOT_PATH . "/app/helpers/formErrors.php") ?>
                
                <form action="edit.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
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
                        <?php if(isset($admin) && $admin == 1): ?>
                            <label>
                                <input type="checkbox" name="admin" checked>
                                Admin
                            </label>
                        <?php else: ?>
                            <label>
                                <input type="checkbox" name="admin">
                                Admin
                            </label>
                        <?php endif; ?>

                    </div>            
                    <div>
                        <button type="submit" name="update-user" class="btn btn-big">Update User</button>
                    </div>
                </form>

            </div>

        </div>

        <!--// Admin Content -->

	</div>
<!-- //Admin page-wrapper -->

<!-- JQuery -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script> 

<script src="https://cdn.ckeditor.com/ckeditor5/17.0.0/classic/ckeditor.js"></script>

<!-- Script -->
<script type="text/javascript" src="../../assets/js/scripts.js"></script>

</body>
</html>