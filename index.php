<?php include('perch/runtime.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset=utf-8>
	<title>Willamette Towers</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<?php perch_get_css(); ?>
	<script type="text/javascript"></script>
    	<script> src="js/jquery-1.11.1.js"</script>
    	<!--Begin Google Tag updated 2021_12-->
    	<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-69555545-1"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());
			gtag('config', 'UA-69555545-1');
		</script>
		<!--End Google Tag update-->
</head>
	
<body>
<div class="page wrapper">
	<div>
		<?php 
				$query = perch_get('q');  // 'q' query string argument e.g. search.php?q=apples
			    perch_content_search($query);
			?>
		</div>
		 	<?php
				if (perch_member_logged_in()) {
			?>	
				<nav class="sidebar searchbar menupage">
		   			<?php perch_search_form(); ?>
				</nav>
					<?php
						}
					?>

<header>	<!--this- <header>- is closed in header.html, perch content 'Heading'-->
   <div class="header"><!--div class="header" is closed in header.html perch content 'Heading'-->

		<h1>Willamette Towers</h1>
		<h2 class="header-subhead">
			<?php perch_content_custom('subheadings',[
				'page' => '/reach.php',
				'template' => '_home_subheading.html',
				'sort' => 'subheading',
				'sort-order' => 'RAND',
				'count' => 1
				]);
			?>
		</h2>

					<?php perch_content('Heading'); ?>
					<?php perch_content('Emergency Alert'); ?>
					<?php perch_content('Main Navigation Items'); ?>
						<footer class="footer">
							<?php perch_content('Home Page Footer'); ?>
								<?php
									if (perch_member_logged_in()) {
								?>	
					
									<?php perch_content('Footer Logged In Info'); ?>

										<?php
											}else{
												echo '<h1 class="hidethis">Hi! Where am I?</h1>';
												}
										?>

						</footer>
								<!--Begin footer. Do not use the global.footer region-->
									<div class="subfooter">
										<p class="black"><a href="members/index.php">Security Login</a>
										</p>
											<p><small><a href="mailto: john.rose3@comcast.net">Author: John Rose <?php echo date('Y'); ?></a></small></p>
									</div>


	</div>  <!-- end class="page" from header -->
			<?php perch_get_javascript(); ?>

</body>
</html>

