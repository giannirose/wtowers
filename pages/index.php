
text/x-generic index.php ( PHP script text )
<?php include('perch/runtime.php');?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset=utf-8>
		<title>Willamette Towers</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<?php perch_get_css(); ?>
			<script type="text/javascript"></script>
    		<script> src="js/jquery-1.11.1.js"</script>		
	</head>
	
<body>
	<div class="page">
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
	<div class="headergroup">
		<h1>Willamette Towers</h1>
		<p class="header-subhead">
			<?php perch_content_custom('subheadings',[
				'page' => '/reach.php',
				'template' => '_home_subheading.html',
				'sort' => 'subheading',
				'sort-order' => 'RAND',
				'count' => 1
				]);
			?>
		</p>
				</div>
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
							<div class="backtotop">
								<a href="index.php">
									<h1>Back to the top</h1>
								</a>
							</div><!--close class="backtotop"-->
								<!--Begin footer. Do not use the global.footer region-->
									<div class="subfooter">
										<p class="black"><a href="members/index.php">Security Login</a>
										</p>
											<p><small><a href="mailto: john.rose3@comcast.net">Author: John Rose <?php echo date('Y'); ?></a></small></p>
									</div>


	</div>  <!-- end class="page" from header -->
			<?php perch_get_javascript(); ?>
				<!--begin Google Analytics script-->
					<script>
  			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  			ga('create', 'UA-69555545-1', 'auto');
  			ga('send', 'pageview');
					</script>
					<!--end Google Analytics script-->
	   <?php PerchUtil::output_debug(); ?>
</body>
</html>
