v<html>
<head>
	<title>Sushmobile - Blog</title>
	<!-- HEADER -->
	<?php include 'php/header.php';?>
</head>

<body>
	<!-- NAVIGATION HEADER -->
	<?php include 'php/nav_header.php';?>	

	<div class="nav_buffer"></div>	

<!-- 	<div class="container">
		<h3 class="title_text">OUR BLOG</h3>	
		<div class="breakline"></div>				
	</div>			 -->

	<div class="blog_list_bg">

		<div class="container">
			<div class="row">
				<div class="col-sm-8">
				
					<!-- BLOG SINGLE ITEM -->
					<?php include 'php/blog_sample_item.php';?>	

					<!-- BLOG SINGLE ITEM -->
					<?php include 'php/blog_sample_item.php';?>	

					<!-- BLOG SINGLE ITEM -->
					<?php include 'php/blog_sample_item.php';?>	

					<ul class="pagination">
					  <li class="disabled"><a href="#">&laquo;</a></li>
					  <li class="active"><a href="#">1</a></li>
					  <li><a href="#">2</a></li>
					  <li><a href="#">3</a></li>
					  <li><a href="#">4</a></li>
					  <li><a href="#">5</a></li>
					  <li><a href="#">6</a></li>
					  <li><a href="#">7</a></li>					  
					  <li><a href="#">&raquo;</a></li>
					</ul>					

				</div>

				<!-- Fixed Side Nav for Blog Links -->
				<!-- ######################################################## -->

				<!-- BLOG SIDE NAV -->				
				<?php include 'php/blog_side_nav.php';?>					

			</div>
		</div>

	</div>

	<!-- FOOTER UNIT -->
	<!-- ####################### -->			
	<?php include 'php/footer.php';?>

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>	
</body>
</html>	