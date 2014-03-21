<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laravel PHP Framework</title>
	<style>
		body {
			margin:0;
			font-family:'Lato', sans-serif;
			text-align:center;
			color: #999;
		}

		.welcome {
			width: 300px;
			height: 200px;
			position: absolute;
			left: 50%;
			top: 50%;
			margin-left: -150px;
			margin-top: -100px;
		}

		a, a:visited {
			text-decoration:none;
		}

		h1 {
			font-size: 32px;
			margin: 16px 0 0 0;
		}
	</style>
</head>
<body>
	<div class="welcome">
			<h1>LOGIN TEST</h1><br /><br />
			<div class="wrapper">
				<div class="loginform">
					<div class="header">
						<div class="text-wrapper">
							<div class="text-header">Sign in</div>
						</div>
					</div>

					<?php if (isset($error)) echo "<div class='error'>$error</div>"; ?>

					<div style="height: 32px;"></div>
					<form id="loginform" action="./logear?callback=<?php echo $callback;?>" method="post">
						<table style="width: 315px;">
							<tr>
								<td><strong>User:</strong></td><td><input type="text" name="user" required="required" value="<?php if(isset($user)) echo $user; ?>"/></td>
							</tr>
							<tr>
								<td><strong>Password:</strong></td><td><input type="password" name="password" required="required"/></td>
							</tr>
							<tr>
								<td>&nbsp;</td><td><input type="submit" value="Sign in"/></td>
							</tr>
						</table>
					</form>
				</div>
			</div>
	</div>
</body>
</html>