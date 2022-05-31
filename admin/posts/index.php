<?php include("../../path.php"); ?>
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
        <link rel="stylesheet" type="text/css" href="../../assets/css/style.css">

	<!--  fontawsome	-->
    <link rel="stylesheet" type="text/css" href="../../assets/css/admin.css">
    

	<title>Admin Section-Manage Topics</title>
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
                <a href="create.php" class="btn btn-big">Add Post</a>
                <a href="index.php" class="btn btn-big">Manage Posts</a>
            </div>

            <div class="content">
                <h2 class="page-title">Manage Posts</h2>

                <?php include(ROOT_PATH . '/app/includes/messages.php') ?>

                <table>
                    <thead>
                        <th>SN</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th colspan="3">Action</th>
                    </thead>
                    <tbody>
                    <?php foreach ($posts as $key => $post): ?>
                        <tr>
                            <td><?php echo $key +1; ?></td>
                            <td><?php echo $post['title']; ?></td>
                            <td>Magnum</td>
                            <td><a href="edit.php?id=<?php echo $post['id']; ?>" class="edit">Edit</a></td>
                            <td><a href="edit.php?delete_id=<?php echo $post['id']; ?>" class="delete">Delete</a></td>
                            <?php if($post['published']): ?>
                                <td><a href="edit.php?published=0&p_id=<?php echo $post['id']; ?>" class="publish">Unpublish</a></td>
                            <?php else: ?>
                                <td><a href="edit.php?published=1&p_id=<?php echo $post['id']; ?>" class="publish">Publish</a></td>
                            <?php endif; ?>

                            
                        </tr>
                    <?php endforeach; ?>
                        
                       
                    </tbody>
                </table>

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