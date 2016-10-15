<?php 	
// QUESTION : NIM SAYA 1521024096, KENAPA KALAU SAYA PAKAI 3 DIGIT TERAKHIR NIM SAYA HASILNYA SELALU 0 PAK? SEPERTINYA ANGKA 0 DIDEPAN 96 BERPENGARUH DI HASIL YA?
echo "DIAMETER LINGKARAN = 96 cm <br>";
		echo "<br>";
	function LUAS(){
	$phi = 3.14;
	$d = 96;
	$r = $d / 2;
	$rumus = $phi * pow($r,2);
	return $rumus;
		}
	echo "1) LUAS LINGKARAN = " . LUAS(). " cm2<br>";

	function KEL(){
	$phi = 3.14;
	$d = 96;
	$rumus = $phi * $d;
	return $rumus;
		}
	echo "2) KELILING LINGKARAN = " . KEL(). " cm<br>";

		function VOL(){
	$phi = 3.14;
	$d = 96;
	$r = $d/2;
	$rumus = 4 * $phi * pow($r,2);
	return $rumus;
		}
	echo "3) VOLUME LINGKARAN = " . VOL(). " cm3<br>";

?>
