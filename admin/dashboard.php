<?php include("../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/posts.php");
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
        <link rel="stylesheet" type="text/css" href="../assets/css/style.css">

	<!--  fontawsome	-->
    <link rel="stylesheet" type="text/css" href="../assets/css/admin.css">
    

	<title>Admin Section-Dashboard</title>
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
                <div class="content">
                <h2 class="page-title">Dashboard</h2>

                <?php include(ROOT_PATH . "/app/includes/messages.php"); ?>
                
                 

            </div>

        </div>

        <!--// Admin Content -->

	</div>
<!-- //Admin page-wrapper -->

<!-- JQuery -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script> 

<script src="https://cdn.ckeditor.com/ckeditor5/17.0.0/classic/ckeditor.js"></script>

<!-- Script -->
<script type="text/javascript" src="../assets/js/scripts.js"></script>

</body>
</html>