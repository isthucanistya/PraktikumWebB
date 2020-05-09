<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="style/login.css">
</head>
<body>
<center>
	<div class="page">
		<form action="login_proses.php" method="POST">
			<div class="header_login">
				<label><h2>LOGIN</h2></label>
			</div>
			<br><br>
			<div class="login">
				<table>
					<tr>
						<td>
							<input type="text" name="username" placeholder="Username">
						</td>
					</tr>
					<tr>
						<td>
							<input type="password" name="password" placeholder="Password">
						</td>
					</tr>
				</table>
				<button type="submit" name="submit" value="Submit"> Submit</button>
			</div>
		</form>
	</div>
</center>
</body>
</html>