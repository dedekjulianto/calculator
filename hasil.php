<?php
$nama1=$_POST['nama1'];
$nama2=$_POST['nama2'];
$hitung=$_POST['hitung'];
switch($hitung) {
	case "+" : $hasil=$nama1 + $nama2;
		break;
	case "-" : $hasil=$nama1 - $nama2;
		break;
	case "*" : $hasil=$nama1 * $nama2;
		break;
	case "/" : $hasil=$nama1 / $nama2;
		break;
	case "%" : $hasil=$nama1 % $nama2;
		break;
	}
echo "Bilangan pertama $nama1<br />";
echo "Bilangan kedua $nama2<br />";
echo "Hasilnyaaa $hasil";
?>
