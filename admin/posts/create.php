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
    

	<title>Admin Section-Add Post</title>
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
                <h2 class="page-title">Add Post</h2>

                <?php include(ROOT_PATH . "/app/helpers/formErrors.php") ?>
                
                <form action="create.php" method="post" enctype="multipart/form-data">

                    <div>
                        <label>Title</label>
                        <input type="text" name="title" value="<?php echo $title; ?>" class="text-input">
                    </div>

                    <div>
                        <label>Body</label>
                        <textarea name="body" id="body"><?php echo $body; ?></textarea>
                    </div>

                    <div>
                        <label>Image</label>
                        <input type="file" name="image" class="text-input">
                    </div>

                    <div>
                        <label>Topics</label>
                        <select name="topic_id" class="text-input">
                            <option value=""></option>
                            <?php foreach ($topics as $key => $topic): ?>
                                <?php if(!empty($topic_id) && $topic_id == $topic['id']): ?>
                                    <option selected value="<?php echo $topic['id']; ?>"><?php echo $topic['name']; ?></option>
                                <?php else: ?>
                                    <option value="<?php echo $topic['id']; ?>"><?php echo $topic['name']; ?></option>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    
                    <div>
                        <?php if(empty($published)): ?>
                            <label>
                                <input type="checkbox" name="published">
                                Publish
                            </label>
                        <?php else: ?>
                            <label>
                                <input type="checkbox" name="published" checked>
                                Publish
                            </label>
                        <?php endif; ?>
                    </div>
                    <div>
                        <button type="submit" name="add-post" class="btn btn-big">Add Post</button>
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