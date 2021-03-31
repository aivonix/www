<?php include "game_menu.php"; ?>
<div class="play">
	<?php if(!empty($messages)){?>
		<?php echo $messages['text']; ?>
		<?php if(!empty($messages['flag']) && $messages['flag'] == 'redirect'){?>
			<?php echo '<span class="counter"></span>'; ?>
		<?php } ?>
	<?php } ?>
	<a href="/hearthstone/play">Play NOW!</a>
</div>