<form method = "POST">
	<table>
		<tr>
			<td>NIM :</td>
			<td><input type="text" name="nim" maxlength="10"></td>
		</tr>

		<tr>
			<td>Password :</td>
			<td><input type="password" name="pass"></td>
		</tr>

		<tr>
			<td><input type="submit" name="login" value="Masuk"></td>
			<td>DAFTAR <a href="daftar.html">DISINI!</a></td>
		</tr>
	</table>
</form>

<?php
	error_reporting(0);
if (isset($_POST['login'])) {
	session_start();

	include 'koneksi.php';

	$nim = $_POST['nim'];
	$password = $_POST['pass'];

	$query = "SELECT nim, password FROM jurnal WHERE nim = '$nim'";

	if ($nim == $_POST['nim'] && $pass == $_POST['password']) {
		$_SESSION["Login Sukses"]=1;
		$_SESSION["nim"]=$query['nim'];
		$_SESSION["password"]=$query['password'];

		echo "Login Sukses";
	}
	else{
		echo "Login gagal";
	}
}

?>