<?php if (!defined('PERCH_RUNWAY')) include($_SERVER['DOCUMENT_ROOT'].'/perch/runtime.php'); ?>
	<?php perch_layout('head');?>

		<div>
		    <?php 
				$query = perch_get('q');  // 'q' query string argument e.g. search.php?q=apples
  					perch_content_search($query, array(
  						'count'=>25,
						'from-path'=>'/documents',
    					'excerpt-chars'=>300
    				));
				?>
		</div>
			<nav class="sidebar searchbar">
		   	<?php perch_search_form(array(
		   	'template'=>'search-form-docs.html'
		   	)); ?>
    		</nav>

	<?php perch_layout('header'); ?>

			<?php perch_content('Documents'); ?>

	<?php perch_layout('global.footer');?>
