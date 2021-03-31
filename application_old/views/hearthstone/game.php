<?php include "game_menu.php"; ?>
<div class="hearthstone" id="over">
	<div id="history">
		<div class="action_icon">1</div>
		<div class="action_icon">2</div>
		<div class="action_icon">3</div>
		<div class="action_icon">4</div>
		<div class="action_icon">5</div>
	</div>
	<div id="end_turn">
		<a href="#">End Turn</a>
	</div>
	
	<div id="p1">
		<div class="title">
			<?php if(!empty($opponent_name)){?>
			<?php echo $opponent_name; ?>
			<?php } ?>
		</div>
		<div class="clickable left"></div>
		<div id="opponent">
			<div class="cards">
				<div class="card1"><img src="http://hearthstone/style/bs/img/ragnaros_golden.png" /></div>
				<div class="card2"><img src="http://hearthstone/style/bs/img/ragnaros_golden.png" /></div>
				<div class="card3"><img src="http://hearthstone/style/bs/img/ragnaros_golden.png" /></div>
				<div class="card4"><img src="http://hearthstone/style/bs/img/ragnaros_golden.png" /></div>
				<div class="card5"><img src="http://hearthstone/style/bs/img/ragnaros_golden.png" /></div>
				<div class="card6"><img src="http://hearthstone/style/bs/img/ragnaros_golden.png" /></div>
			</div>
			<div class="mana">Mana: <?php echo 2//$mana_score; ?></div>
			<div class="hero"></div>
		</div>
		<div class="clickable right"></div>
	</div>
	<div id="field">
		<div class="top"></div>
		<div class="bottom"></div>
	</div>
	<div id="p2">
		<div class="title">
			<?php if(!empty($player_name)){?>
			<?php echo $player_name; ?>
			<?php } ?>
		</div>
		<div class="clickable left"></div>
		<div id="player">
			<div class="cards">
				<div class="card1"><img src="http://hearthstone/style/bs/img/ragnaros_golden.png" /></div>
				<div class="card2"><img src="http://hearthstone/style/bs/img/ragnaros_golden.png" /></div>
				<div class="card3"><img src="http://hearthstone/style/bs/img/ragnaros_golden.png" /></div>
				<div class="card4"><img src="http://hearthstone/style/bs/img/ragnaros_golden.png" /></div>
				<div class="card5"><img src="http://hearthstone/style/bs/img/ragnaros_golden.png" /></div>
				<div class="card6"><img src="http://hearthstone/style/bs/img/ragnaros_golden.png" /></div>
			</div>
			<div class="mana"></div>
			<div class="hero"></div>
		</div>
		<div class="clickable right"></div>
	</div>
</div>