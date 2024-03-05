<!DOCTYPE html>
<html>
<head>
	<title>SIGN IN</title>
	<link rel="stylesheet" type="text/css" href="loginstyles.css">
</head>
<body>
    <div><img src="logo.png" alt="Logo"></div>
     <form action="login.php" method="post" id="form">
     	<h2>Sign In</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>User Name :</label>
     	<input type="text" name="uname" placeholder="User Name"><br>

     	<label>Password :</label>
     	<input type="password" name="password" placeholder="Password"><br>

     	<button type="submit">Sign In</button>
     </form>
</body>
</html>