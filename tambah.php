<html>
<head>
	<title>Tambah Data</title>
</head>

<body>
<?php
//masukan juga koneksi ke database
include_once("config.php");

if(isset($_POST['Submit'])) {	
	$name = mysqli_real_escape_string($mysqli, $_POST['name']);
	$age = mysqli_real_escape_string($mysqli, $_POST['age']);
	$email = mysqli_real_escape_string($mysqli, $_POST['email']);
		
	// untuk mengecek kosong atau terisi
	if(empty($name) || empty($age) || empty($email)) {
				
		if(empty($name)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($age)) {
			echo "<font color='red'>Age field is empty.</font><br/>";
		}
		
		if(empty($email)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}
		
		//link ke halaman sebelum nya
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// jika semua terisi semua
			
		//masukan data ke database	
		$result = mysqli_query($mysqli, "INSERT INTO users(name,age,email) VALUES('$name','$age','$email')");
		
		//menampilkan pesan berhasil
		echo "<font color='green'>Data Berhasil Ditambahkan.";
		echo "<br/><a href='index.php'>Lihat Hasil</a>";
	}
}
?>
</body>
</html>
