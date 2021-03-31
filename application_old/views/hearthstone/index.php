<?php include "game_menu.php"; ?>
<div class="hearthstone" id="over">
	<div id="games_list">
		<?php if(!empty($games_queue_list)){?>
		<ul>
			<?php foreach ($games_queue_list as $i): ?>
			<li>Duel with <a href="/hearthstone/play/<?php echo $i->id; ?>"><?php echo $i->player1_name; ?> <?php echo $i->player2_name; ?></a></li>
			<?php endforeach; ?>
		</ul>
		<?php } ?>
	</div>
	<div id="play_now">
		<a href="/hearthstone/play">Play NOW!</a>
	</div>
</div>