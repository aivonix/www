<?php include "game_menu.php"; ?>
<?php if(!empty($games_queue_list)){?>
	<?php foreach ($games_queue_list as $i): ?>
		<p>Play with <a href="/hearthstone/play/<?php echo $i->id; ?>"><?php echo $i->player1_name; ?></a></p>
	<?php endforeach; ?>
<?php } ?>