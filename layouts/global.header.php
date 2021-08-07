<!doctype html>
<html>
	<head>
		<meta charset=utf-8>
		<title><?php perch_pages_title(); ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<?php perch_page_attributes(); ?>
			<?php perch_get_css(); ?>
				<script type="text/javascript"></script>
 <!--   			<script> src="js/jquery-1.11.1.min.js"</script>	 Checking if the site will work without downloading jquery -->
	</head>
   <body >
		<div class="page wrapper"> <!--div class="page" is closed in the global footer-->
			<div class="headerbar"> <!--begin header-->
				<header> 
					<hgroup>
						<h1 class="header-head">Willamette Towers</h1>	
							<perch:if exists="subhead">	
								<p class="header-subhead"><perch:content id="sub_subhead" type="text" label="Sub-headline for page header" order="2"/></p>	
							</perch:if>
					</hgroup>
						<nav> 
							<ul>
								<li><a href="/index.php" >Menu Page</a></li> 
							</ul>
						</nav>					
				</header>
			</div> <!-- end div class="headerbar" -->
				<div class="border"><!--adds border around all content following the header- not used on the index.php page. This div is closed in the global.footer-->
