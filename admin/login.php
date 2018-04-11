<?php
	include ('admin_header.php');
?>
<body>
	<div id="page">
		<form class="login_form" action="/admin/login_handle.php" method="post" >
			Username: <input id="username" name="username" type="text" /><br>
			Password: <input id="password" name="password" type="password" /><br>
			<input id="login" name="login" value="Login" type="submit" />
		</form>
	</div>
</body>
</html>