<div class="details" id="portfolio">
	<div class="leftColumn col-lg-6">
		<?PHP //echo img('/style/imgs/portfolio/Clairebella/c1.jpg'); ?>
		<!-- CAROUSEL TEST -->
		
		<div id="carousel" class="carousel slide" data-ride="carousel" data-interval="6000" style="width: 555px; height: 465px;">
			<!-- Indicators 
			<ol class="carousel-indicators">
				<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
				<li data-target="#carousel-example-generic" data-slide-to="1"></li>
				<li data-target="#carousel-example-generic" data-slide-to="2"></li>
			</ol>-->

			<!-- Wrapper for slides -->
			<div class="carousel-inner">
				<div class="item active">
					<img src="<? echo $portfolio[0]->imgs_path; ?>/c1.jpg" class="img-responsive" alt="" />
				</div>
				<div class="item">
					<img src="<? echo $portfolio[0]->imgs_path; ?>/c2.jpg" class="img-responsive" alt="" />
				</div>
				<div class="item">
					<img src="<? echo $portfolio[0]->imgs_path; ?>/c3.jpg" class="img-responsive" alt="" />
				</div>
				<div class="item">
					<img src="<? echo $portfolio[0]->imgs_path; ?>/c4.jpg" class="img-responsive" alt="" />
				</div>
			</div>

			<!-- Controls 
			<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left"></span>
			</a>
			<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right"></span>
			</a>-->
		</div>
		<div style="clear: both;"></div>
		<ul class="slider_ctrl">
			<li data-target="#carousel" data-slide-to="0" class="active"><a href="#"><?PHP echo img($portfolio[0]->imgs_path.'/tmb_c1.jpg'); ?></a></li>
			<li data-target="#carousel" data-slide-to="1"><a href="#"><?PHP echo img($portfolio[0]->imgs_path.'/tmb_c2.jpg'); ?></a></li>
			<li data-target="#carousel" data-slide-to="2"><a href="#"><?PHP echo img($portfolio[0]->imgs_path.'/tmb_c3.jpg'); ?></a></li>
			<li data-target="#carousel" data-slide-to="3"><a href="#"><?PHP echo img($portfolio[0]->imgs_path.'/tmb_c4.jpg'); ?></a></li>
		</ul>
	</div>
	<div class="rightColumn col-lg-6">
		<?php foreach ($portfolio as $row):?>
		<div class="particle">
			<h3><?=$row->title?></h3>
			<ul class="skills">
			<?php
			
			$res = explode(',', $row->skills);
			foreach($res as $rowIn){
				echo '<li class="fa fa-circle-o"><span>'.$rowIn.'</span></li>';
			}
			?>
			</ul>
			<p class="description">
				<?=$row->description?>
			</p>
			<!--<p class="likes">Like this project:<?=$row->likes?></p>-->
			<p class="view">
				<a class="btn btn-lg btn-danger" href="<?=$row->href?>">View Website</a>
			</p>
		</div>

		<?php endforeach; ?>
		
	</div>
</div>
