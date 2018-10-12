<?php

	if (isset($_POST['submit'])) {
		$conn=new mysqli("localhost","root","","jurnal6");
			if (isset($_POST['submit'])) {
					if (strlen($_POST['nim'])==10 && ($_POST['nama'])<35){
							if ($conn) {
								$nim=$_POST['nim'];
								$nama=$_POST['nama'];
								$pass=$_POST['pass'];
								$kelas=$_POST['kelas'];
								$kelamin=$_POST['kelamin'];
								$alamat=$_POST['alamat'];
								$fakultas=$_POST['fakultas'];
								$hobi=$_POST['hobi'];
									if (!empty($_POST['hobi'])){
										foreach ($hobi as $hobby) {}
									}
									$sql="INSERT INTO `akun` (`nama`,`nim`,`password`,`kelas`,`jenis kelamin`,`hobi`,`fakultas`,`alamat`)
										VALUES ('$nama','$nim','$pass','$kelas','$kelamin','$hobby','$fakultas','$alamat')";
									$conn->query($sql);
										echo "input berhasil, input data lagi <a href='registrasi.php'>disini!</a>";
							}
					}else{
						echo "input gagal, input kembali <a href='registrasi.php'>disini</a>";
					}
			}
	}	
?>
