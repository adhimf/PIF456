<!DOCTYPE html > 
<html> 
	<head> 
	  <title>Tugas Praktikum</title> 
		<style type="text/css">
		<!--
		.border1 {
		border: 2px solid blue;
		background: Lime;
		margin: auto;
		width: 300px;
		height: 300px;
		margin-top:100px;
		}

		.border2 {
		background: cyan;
		padding: 5px 40px 5px 40px;
		}

		body {
		background-color: Lawngreen;
		}
		--> 
		</style>
	</head>

	<body>
		<form id="loginForm" action="<?php $_SERVER['PHP_SELF'];?>" method="post">
		<div class="border1">
		<div class="border2">
		<h3 align="center">LOGIN </h3>
		<hr/>
		<p><strong>Username</strong><br />
		<input type="text" name="username" size="30"/>
		</p>
		<p><strong>Password</strong><br />
		<input type="password" name="password" size="30"/>
		</p>
		<p>
		<input type="submit" value="Login" onclick="login();"/>
		</p>
		</div>
		</div>
		</form>
		
		<div align = "center">
		<?php 
			$user = 'adhimf';
			$pass = '11111';
			if ((isset($_POST['username']) == $user)&&(isset($_POST['password'] )== $pass)){
			echo "<font face='Time New Roman' size='4' color=Orangered><br><br>selamat datang<br>". $_POST['username'];
			}
			else if ((isset($_POST['username']) == $user)){
				echo "<font face='Time New Roman' size='4' color=Orangered><br><br>pasword anda salah";
			}
			else if ((isset($_POST['password'] )== $pass)){
				echo "<font face='Time New Roman' size='4' color=Orangered><br><br>username anda salah";
			}
			else {
			echo "<font face='Time New Roman' size='4' color=Orangered><br><br>Username & Password yang anda masukkan salah, Coba lagi<br>";
			}	
		
		?>
	</body>
</html>


<script type="text/javascript">
	function login() {
		var loginForm = document.getElementById("loginForm");
		if (loginForm.username.value == "") {
			alert("Silahkan Masukkan User Name");
			return false;
		}
		if (loginForm.password.value == "") {
			alert("Silahkan Masukkan Password.");
			return false;
		}
	}
</script>