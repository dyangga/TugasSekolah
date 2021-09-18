<?php
/*

Tugas Kelompok 5
Ketua: Desta Adyangga Saputra

*/


// Aritmatika Di PHP
echo "Aritmatika PHP\n\n";

// input bilangan 
$inputA = readline("Bilangan A: ");
$inputB = readline("Bilangan B: ");
$operator = readline("Operator [+, -, /, *]: ");

// Proses Kondisi dan Perhitungan
if ($operator == "+") {
	$hasil = $inputA + $inputB;

} elseif ($operator == "-") {
	$hasil = $inputA - $inputB;

} elseif ($operator == "/") {
	$hasil = $inputA / $inputB;
	
} elseif ($operator == "*") {
	$hasil = $inputA * $inputB;

} else {
	$hasil = "Operator Tidak ditemukan";
}

// menampilkan hasil penjumlahan
echo "\nHasil: ";
echo $hasil;

?>