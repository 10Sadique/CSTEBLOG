<?php 
include("path.php");
include(ROOT_PATH . "/app/controllers/topics.php"); 

$posts = array();
$postsTitle = 'Recent Posts';

if (isset($_GET['t_id'])) {
	$posts = getPostsByTopicId($_GET['t_id']);
	$postsTitle = "You searched for post under '" . $_GET['name'] . "'";
}else if (isset($_POST['search-term'])) {
	$postsTitle = "You searched for '" . $_POST['search-term'] . "'";
	$posts = searchPosts($_POST['search-term']);
}else {
	$posts = getPublishedPosts();
}


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


	<title>Blog</title>
</head>
<body>
    
<?php include(ROOT_PATH . "/app/includes/header.php") ?>
<?php include(ROOT_PATH . "/app/includes/messages.php") ?>




<!-- page-wrapper -->
	<div class="page-wrapper">

<!-- post slider -->
		<div class="post-slider">
			<h1 class="slider-title">Trending Posts</h1>
			<i class="fas fa-chevron-left prev"></i>
			<i class="fas fa-chevron-right next"></i>
			<div class="post-wrapper">

			<?php foreach ($posts as $post):?>
				<div class="post">
					<img src="<?php echo BASE_URL . '/assets/images/' . $post['image']; ?>" alt="image_1" class="slider-image">
					<div class="post-info">
						<h4><a href="single.php?id=<?php echo $post['id']; ?>"><?php echo $post['title']; ?></a></h4>
						<i class="far fa-user"><?php echo $post['username']; ?></i>
						&nbsp;
						<i class="far fa-calendar"><?php echo date('F j, Y', strtotime($post['created_at'])); ?></i>
					</div>
				</div>
			<?php endforeach; ?>

			</div>

		</div>
<!-- //post slider -->

<!-- Content -->
	<div class="content clearfix">
<!--Main Content-->		
		<div class="main-content">
			<h1 class="recent-post-title" style="color: #9b59b6;"><?php echo $postsTitle ?></h1>
			<?php foreach ($posts as $post):?>
				<div class="post clearfix">
					<img src="<?php echo BASE_URL . '/assets/images/' . $post['image']; ?>" class="post-image">
					<div class="post-preview">
						<h2><a href="single.php?id=<?php echo $post['id']; ?>"><?php echo $post['title'] ?></a></h2>
						<i class="far fa-user"><?php echo $post['username']; ?></i>
						&nbsp;
						<i class="far calender"><?php echo date('F j, Y', strtotime($post['created_at'])); ?></i>
						<p class="preview-text">
							<?php echo html_entity_decode(substr($post['body'], 0, 150) . '...'); ?>
						</p>
						<a href="single.php?id=<?php echo $post['id']; ?>" class="btn read-more">Read More</a>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
<!--// Main Content-->
		<div class="sidebar">

			<div class="section search">
				<h2 class="section-title" style="color: #9b59b6">Search</h2>
				<form action="index.php" method="post">
					<input type="text" name="search-term" class="text-input" placeholder="Search">
				</form>
			</div>

			<div class="section topics">
				<h2 class="section-title" style="color: #9b59b6">Topics</h2>
				<ul>
				<?php foreach ($topics as $key => $topic): ?>
                    <li><a href="<?php echo BASE_URL . '/index.php?t_id=' . $topic['id'] . '&name=' . $topic['name']; ?>"><?php echo $topic['name']; ?></a></li>
				<?php endforeach; ?>
				</ul>
			</div>

		</div>
	</div>
<!--// Content -->

	</div>
<!-- //page-wrapper -->

<?php include(ROOT_PATH . "/app/includes/footer.php") ?>

<!-- JQuery -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script> 

<!-- Slick -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<!-- Script -->
<script type="text/javascript" src="assets/js/scripts.js"></script>

</body>
</html>