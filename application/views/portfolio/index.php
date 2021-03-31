<div class="row">
	<div class="showroom" id="portfolio">
		<?php foreach ($portfolio as $key => $row):?>
			<div class="col-lg-6">
				<div class="inner">
					
						<div class="showroom_hover">
							<a href="<?php echo base_url()."portfolio/".$row->id;?>">
								<img src="<? echo $row->imgs_path; ?>/logo.jpg" class="img-responsive" alt="<? echo $row->title; ?>" />
								<div class="showroom_mask"></div>
							</a>
							<div class="showroom_menu">
								<ul>
									<li><a href="#" class="more_info">1</a></li>
									<li><a href="#" class="ask">2</a></li>
									<li><a href="#" class="tweet">3</a></li>
								</ul>
							</div>
						</div>
					
				</div>
			</div>
		<?php endforeach;?>
	</div>
</div>
<div class="row">
	<div id="pagination" class="center-block">
		<div class="pagination">
			<a href="#" class="first" data-action="first">&laquo;</a>
			<a href="#" class="previous" data-action="previous">&lsaquo;</a>
			<input type="text" readonly="readonly" data-max-page="40" />
			<a href="#" class="next" data-action="next">&rsaquo;</a>
			<a href="#" class="last" data-action="last">&raquo;</a>
		</div>
	</div>
</div>