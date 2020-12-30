<?php include($_SERVER['DOCUMENT_ROOT'].'/perch/runtime.php'); ?>
	<?php perch_layout('head');?>
		<div>
		   <?php 
				$query = perch_get('q');  // 'q' query string argument e.g. search.php?q=apples
			    perch_content_search($query, array(
  						'count'=>25,
						'from-path'=>'/minutes_monthly',
    					'excerpt-chars'=>300
    				));
				?>
		</div>

		 	<?php
				if (perch_member_logged_in()) {
			?>	

				<nav class="sidebar searchbar menupage">
		   	<?php perch_search_form(array(
		   	'template'=>'search-form-minutes.html'
		   	)); ?>
				</nav>
					<?php
						}else{
							echo '<h1 class="hidethis">Hi! Where am I?</h1>';
						}
					?>

	<?php perch_layout('header'); ?>

		<?php perch_content('Board Minutes - Monthly'); ?>
	<?php perch_layout('global.footer');?>
