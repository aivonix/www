<?php if(!empty($email)){ ?>
<p>
	Congratulations, you have registered successfully. A confirmation email has been sent to <strong><?php echo $email; ?></strong>. It will be valid for 30 minutes.
</p>
<?php }else{ ?>
<p> You will be redirected to the <a href="/login">login page</a> in <span class="counter"></span></p>
<?php } ?>