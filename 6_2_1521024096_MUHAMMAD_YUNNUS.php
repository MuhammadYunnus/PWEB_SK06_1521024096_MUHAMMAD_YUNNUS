<?php
	echo "NAMA : MUHAMMAD YUNNUS WAHYU UTOMO <br>";
	echo "<H3> NIM : 1521024096 <br></H3>";
	echo "<br>";
	echo "BALOK / PERSEGI PANJANG<br>";
	function LUAS(){
	$pj = 96;
	$l = 24;
	$rumus = $pj * $l;
	return $rumus;
		}
	echo "1) LUAS PERSEGI PANJANG = " . LUAS(). " cm2<br>";

		function KEL(){
	$pj = 96;
	$l = 24;
	$rumus = ($pj*2) + ($l*2);
	return $rumus;
		}
	echo "2) KELILING PERSEGI PANJANG = " . KEL(). " cm<br>";

		function VOL(){
	$pj = 96;
	$l = 24;
	$t = 521;
	$rumus = $pj * $l * $t;
	return $rumus;
		}
	echo "3) VOLUME BALOK = " . VOL(). " cm3<br>";

		function LP_BALOK(){
	$pj = 96;
	$l = 24;
	$t = 521;
	$rumus = 2 * (($pj*$l) + ($pj*$t) + ($l*$t));
	return $rumus;
		}
	echo "4) LUAS PERMUKAAN BALOK = " . LP_BALOK(). " cm3<br>";

	echo "<br>";


	echo "KUBUS / PERSEGI<br>";

	function LUAS_PSG(){
	$s = 96;
	$rumus = $s * $s;
	return $rumus;
		}
	echo "1) LUAS PERSEGI = " . LUAS_PSG(). " cm2<br>";

		function KEL_PSG(){
	$s = 96;
	$rumus = $s + $s +$s +$s ;
	return $rumus;
		}
	echo "2) KELILING PERSEGI = " . KEL_PSG(). " cm<br>";

		function VOL_PSG(){
	$S = 96;
	$rumus = $S * $S * $S;
	return $rumus;
		}
	echo "3) VOLUME KUBUS = " . VOL_PSG(). " cm3<br>";

		function LP_PSG(){
	$S = 96;
	$rumus = 6 * $S * $S;
	return $rumus;
		}
	echo "4) LUAS PERMUKAAN KUBUS = " . LP_PSG(). " cm3<br>";

	echo "<br>";




	echo "KERUCUT";
		echo "<br>";
	function LUAS_LING(){
	$phi = 3.14;
	$d = 96;
	$r = $d / 2;
	$rumus = $phi * pow($r,2);
	return $rumus;
		}
	echo "1) LUAS ALAS = " . LUAS_LING(). " cm2<br>";

	function KEL_LING(){
	$phi = 3.14;
	$d = 96;
	$rumus = $phi * $d;
	return $rumus;
		}
	echo "2) KELILING ALAS = " . KEL_LING(). " cm<br>";

		function VOL_LING(){
	$phi = 3.14;
	$d = 96;
	$t = 24;
	$r = $d/2;
	$rumus = 1/3 * $phi * pow($r,2) * $t;
	return $rumus;
		}
	echo "3) VOLUME KERUCUT = " . VOL_LING(). " cm3<br>";


		function LP_KERUCUT(){
	$phi = 3.14;
	$d = 96;
	$t = 24;
	$r = $d/2;
	$rumus =$phi * pow($r,2) * $t;
	return $rumus;
		}
	echo "4) LUAS PERMUKAAN KERUCUT = " . LP_KERUCUT(). " cm2<br>";

?>