<div id="register">
	<form method="POST">
		<p><span>Username:</span> <input type="text" name="username" /></p>
		<p><span>Password:</span> <input type="password" name="password" /></p>
		<p><span>First Name:</span> <input type="text" name="firstname" /></p>
		<p><span>Last Name:</span> <input type="text" name="lastname" /></p>
		<p><span>Email:</span> <input type="text" name="email" /></p>
		<p><input type="submit" value="Register" /></p>
	</form>
</div>
<?php if(!empty($err_msg)){ ?>
<ul id="error_box">
	<?php foreach ($err_msg as $i): ?>
	<li><?php echo $i; ?></li>
	<?php endforeach; ?>
</ul>
<?php } ?>