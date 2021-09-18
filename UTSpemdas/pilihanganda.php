<?php


echo "
[1] Buat Pilihan Gada
[2] Kerjakan Pilihan Ganda

";

$pilih = readline("[?] Pilih: ");

if ( $pilih == "1" ) {
    $namafile = readline("Nama Pilihan Ganda: ");
    $jumlahsoal = readline("Jumlah Soal: ");
    $data = array("jumlah" => $jumlahsoal);
    echo "\nSilahkan isi list berikut ini.\n";

    for ($i=1; $i<=$jumlahsoal; $i++) {
        $soal = readline("[" . $i ."] Pertanyaan / soal: ");
        $jawab = readline("    Jawaban: ");

        $data[$i] = $soal."|".$jawab;

        echo "\n";
    }
    
    $write = fopen(".log/".$namafile.".json", "a");
    fwrite($write, json_encode($data));
    fclose();
    echo "Pilihan Ganda berhasil dibuat, file: " . $namafile.".json";

} elseif ($pilih == "2") {
    $namafile = readline("Nama Pilihan Ganda: ");
    $data = json_decode(fread(fopen(".log/" . $namafile.".json", "r"), filesize(".log/" . $namafile.".json")));
    
    echo "\nSelamat Mengerjakan!\n";


    $benar = 0;
    $salah = 0;

    for ($a=1; $a<=$data->jumlah; $a++) {
        $split = explode("|", $data->$a);
        
        $soal = $split[0];
        $jawaban = $split[1];

        echo "\n"."[".$a."] ".$soal."\n";
        $jawab = readline("[?] jawaban: ");
        if ($jawab == $jawaban) {
            $benar++;
        } else {
            $salah++;
        }
    }

    echo "\n--- hasil ---\n\n[+] jawaban benar: ".$benar;
    echo "\n[-] jawaban salah: ".$salah;

}


?>
