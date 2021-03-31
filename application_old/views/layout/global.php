<!DOCTYPE html>
<html lang="en" ng-app>
<head>
	<meta charset="utf-8">
	<?php echo link_tag('style/bs/css/global.css'); ?>
	<script type="text/javascript" src="<?php echo base_url();?>style/bs/js/jquery-1.10.2.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>style/bs/js/angular.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>style/bs/js/core.js"></script>
	<?php if(!empty($js_scripts)){?>
	<?php foreach ($js_scripts as $i): ?>
	<script type="text/javascript" src="<?php echo base_url();?>style/bs/js/<?php echo $i; ?>"></script>
	<?php endforeach; ?>
	<?php } ?>
	<title>Aivonix WORLD - <?php echo isset($title) ? $title : "404" ?> </title>
</head>
<body>

<div id="wrapper"><div id="inner_wrapper" class="<?php echo !empty($overlay_type) ? $overlay_type : ""; ?>">
	<div id="header">
		<h1>Aivonix <span class="h_color1">WORLD</span>!</h1>
		<header>
			<nav>
				<ul>
					<li><a href="<?php echo base_url(); ?>">Home</a></li>
					<li><a href="<?php echo base_url(); ?>archives">Archive</a></li>
					<li><a href="<?php echo base_url(); ?>goals">Goals</a></li>
					<li><a href="<?php echo base_url(); ?>about">About</a></li>
					<li><a href="<?php echo base_url(); ?>contact">Contact</a></li>
					<li><a href="<?php echo base_url(); ?>cards">Cards</a></li>
					<li><a href="<?php echo base_url(); ?>portfolio">Portfolio</a></li>
				</ul>
			</nav>
			<div id="search">
				<form>
					<input name="search" type="text" />
					<input type="submit" value="Go" />
				</form>
			</div>
			<div id="user">
				<?php if($user_id){?>
					Welcome <?php echo $fullname;?>, <a href="/logout">logout</a>
				<?php }else{?>
					<a href="/login">login</a>
				<?php }?>				
			</div>
		</header>
	</div>
	<div class="hearthstone" id="content">
		<?php $this->load->view($content)?>
	</div>
	<div id="footer">
		<nav>
			<ul>
				<li><a href="#">Home</a></li>
				<li><a href="#">Archive</a></li>
				<li><a href="#">Goals</a></li>
				<li><a href="#">About</a></li>
				<li><a href="#">Contact</a></li>
			</ul>
		</nav>
	</div>
</div></div>

</body>
</html>