<?php
function namatempat($kota) {
	echo "pergilah ke $kota. <br>";
}
namatempat ("Yogyakarta");
namatempat ("Surabaya");
namatempat ("Semarang");
echo "<br>";


function tanggalan($tanggal,$bulan) {
	echo "Saya lahir tanggal $tanggal di bulan $bulan <br />";
}
tanggalan (12,"Juni");
tanggalan (13,"Agustus");
tanggalan (14,"Desember");

echo "<br>";

function tinggi($badan = 70) {
	echo "tinggi kamu $badan <br>";
}
tinggi (82);
tinggi();
tinggi(51);
echo "<br>";

function identitas($nama, $umur){
	for ($x = 0; $x < 2; $x++) {
		echo "Nama saya $nama dan berumur $umur<br>"; 
	}
	echo "<br />";
}
identitas ("Waras",53);
identitas ("Budiman",31);


function sum($x, $y) {
	$z = $x + $y;
	return $z;
}
echo "12 + 45 = " . sum(12, 45) . "<br>";
echo "2 + 67 = " . sum(2, 67) . "<br>";
echo "22 + 12 = " . sum(22, 12);
echo "<br>";
echo "<br>";


function kurang($x, $y) {
	$z = $x - $y;
	return $z;
}
echo "15 - 12 = " . kurang(15, 12) . "<br>";
echo "90 - 67 = " . kurang(90, 67) . "<br>";
echo " 55 - 66 = " . kurang(55, 66);
echo "<br>";


?>