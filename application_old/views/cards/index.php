<div id="cards_list">
	<?php if(!empty($cards_list)){?>
	<ul>
		<?php foreach ($cards_list as $i): ?>
		<li class="id<?php echo $i->temp; ?>"><?php echo $i->id; ?> <strong><?php echo $i->name; ?></strong> : <?php echo $i->text; ?></li>
		<?php endforeach; ?>
	</ul>
	<?php } ?>
</div>