<?php

$tiket = readline("Pilih Tiket: ");

if ($tiket == "1") {
	echo "\nKursi VIP";
} elseif ($tiket == "2") {
	echo "\nKursi STANDART";
} elseif ($tiket == "3") {
	echo "\nKursi UMUM";
} else {
	echo "\nPenuh";
}

?>