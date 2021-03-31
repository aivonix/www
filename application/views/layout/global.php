<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Aivonix WORLD is the personal website of Nikolay Aleksandrov. Here you can find information about me and my past and future projects, play and socialise with other visitors and keep in touch with new content.">
	<meta property="twitter:card" content="summary" />
	<meta property="twitter:site" content="@aivonix" />
	<meta property="twitter:title" content="Aivonix WORLD" />
	<meta property="twitter:description" content="Explore current and released projects @ Aivonix WORLD" />
	<meta property="twitter:creator" content="Aivonix" />
	<meta property="twitter:image" content="http://aivonix.name/warframe_contest1.jpg" />
	<meta property="twitter:url" content="http://aivonix.name" />
	
	<!-- Bootstrap -->
	<?php echo link_tag('style/plugins/bootstrap/css/bootstrap.min.css'); ?>
	<?php echo link_tag('style/plugins/bootstrap/css/bootstrap-theme.min.css'); ?>
	<?php echo link_tag('style/plugins/font-awesome/css/font-awesome.min.css'); ?>
	<?php echo link_tag('style/bs/css/global.css'); ?>
	<!-- CSS plugins -->
	<?php if(!empty($css_plugins)){?>
	<?php echo $css_plugins; ?>
	<?php } ?>
	
	<!-- JS core -->
	<script type="text/javascript" src="<?php echo base_url();?>style/bs/js/jquery-1.11.1.js"></script>
	<!--<script type="text/javascript" src="<?php echo base_url();?>style/bs/js/angular.js"></script>-->
	<script type="text/javascript" src="<?php echo base_url();?>style/bs/js/core.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>style/plugins/bootstrap/js/bootstrap.min.js"></script>
	
	<!-- JS main scripts -->
	<?php if(!empty($js_scripts)){?>
	<?php foreach ($js_scripts as $i): ?>
	<script type="text/javascript" src="<?php echo base_url();?>style/bs/js/<?php echo $i; ?>"></script>
	<?php endforeach; ?>
	<?php } ?>
	
	<!-- JS plugins -->
	<?php if(!empty($js_plugins)){?>
	<?php echo $js_plugins; ?>
	<?php } ?>
	
	<title><?php echo isset($title) ? $title : "404" ?> - Aivonix WORLD - </title>
	<!-- GAnalytics -->
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-1365979-2', 'auto');
		ga('send', 'pageview');
	</script>
	<script type="text/javascript">
		
	</script>
</head>
<body>

<div id="wrapper">
	<div id="header"><div id="header_inner" class="container">
			
		<header class="navbar navbar-inverse" role="navigation">
	
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button data-target="#collapsing-navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<!--<a href="#" class="navbar-brand">Brand</a>-->
				<div class="col-xs-12 col-md-12" id="logo">
					<h1>Aivonix <span class="h_color1">WORLD</span>!</h1>
				</div>
			</div>
			<div id="collapsing-navbar" class="navbar-collapse collapse" style="height: 1px;">					
				<nav class="col-xs-12 col-sm-7 col-md-6">
					<ul class="nav nav-pills">
						<li><a href="<?php echo base_url(); ?>">Home</a></li>
						<li><a href="<?php echo base_url(); ?>portfolio">Portfolio</a></li>
						<li><a href="<?php echo base_url(); ?>projects">Projects</a></li>
						<li><a href="<?php echo base_url(); ?>blog">Blog</a></li>
						<li><a href="<?php echo base_url(); ?>about">About</a></li>
					</ul>
				</nav>
				<div class="col-xs-12 col-md-2" id="search">
					<form class="center-block">
						<input name="search" type="text" />
						<input type="submit" value="Go" />
					</form>
				</div>
			</div>
		</header>
	</div></div>
	<div id="content"><div id="content_inner" class="container">
		<?php $this->load->view($content)?>
	</div></div>
	<div id="footer"><div id="footer_inner" class="container">
		<div class="col-sm-2 col-md-2" id="info">
			<h3>Aivonix WORLD</h3>
			<p>
				<img />
				<span>Welcome to yet another creative spot on the web</span>
			</p>
		</div>
		<div class="col-sm-3 col-md-3" id="blog">
		</div>
		<nav class="col-sm-5 col-md-5">
			<ul class="nav nav-pills">
				<li><a href="<?php echo base_url(); ?>">Home</a></li>
				<li><a href="<?php echo base_url(); ?>portfolio">Portfolio</a></li>
				<li><a href="<?php echo base_url(); ?>projects">Projects</a></li>
				<li><a href="<?php echo base_url(); ?>blog">Blog</a></li>
				<li><a href="<?php echo base_url(); ?>about">About</a></li>
			</ul>
		</nav>
		<div class="col-sm-2 col-md-2 col-xs-12" id="twitter-snippet">
			<?PHP echo $twitter; ?>
		</div>
	</div></div>
</div>

</body>
</html>