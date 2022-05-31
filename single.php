<?php include("path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/posts.php"); 

if (isset($_GET['id'])) {
	$post = selectOne('posts', ['id' => $_GET['id']]);
}

$topics = selectAll('topics');
$posts = selectAll('posts', ['published' => 1]);

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


	<title><?php echo $post['title'];?> | CSTEBLOG</title>
</head>
<body>
<!-- facebook plugin -->
        <div id="fb-root"></div>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v6.0&appId=298318904001307&autoLogAppEvents=1"></script>
<!-- //facebook plugin -->

<?php include(ROOT_PATH . "/app/includes/header.php") ?>

<!-- page-wrapper -->
	<div class="page-wrapper">

<!-- Content -->
	<div class="content clearfix">
<!--Main Content-->		
			<div class="main-content wrapper">
				<div class="main-content single">
					<h1 class="post-title"><?php echo $post['title'];?></h1>
					<div class="post-content">
					<?php echo html_entity_decode($post['body']);?>
					</div>
			</div>
		</div>
<!--// Main Content-->
<!--Sidebar-->
		<div class="sidebar single">
<!-- facebook plugin -->
                <div class="fb-page" data-href="https://www.facebook.com/CSTEClub/" data-tabs="" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/CSTEClub/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/CSTEClub/">CSTE Club</a></blockquote></div>
<!-- //facebook plugin -->

            <div class="section popular">
                <h2 class="section-title">Popular</h2>

				<?php foreach ($posts as $p): ?>
					<div class="post clearfix">
						<img src="<?php echo BASE_URL . '/assets/images/' . $p['image']; ?>" alt="">
						<a href="" class="title">
							<h4><?php echo $p['title'];?></h4>
						</a>
					</div>
				<?php endforeach; ?>
                
     
            </div>

			<div class="section topics">
				<h2 class="section-title" style="color: #9b59b6">Topics</h2>
				<ul>
					<?php foreach ($topics as $topic): ?>
						<li><a href="<?php echo BASE_URL . '/index.php?t_id=' . $topic['id'] . '&name=' . $topic['name']; ?>"><?php echo $topic['name']; ?></a></li>
					<?php endforeach; ?>
				</ul>
			</div>

        </div>
<!--//Sidebar-->
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