<?php

class TokoBuku {
    public $judul = array("Mushoku Tensei", "One Punch Man", "Bawang Merah Bawang Putih"),
           $pengarang = array("Rifujin na Magonote", "Yusuke Murata", "Zawiah Ahmad"),
           $jenis = array("Light Novel", "Komik", "Dongeng"),
           $penerbit = array("Media Factory", "Shueisha", "Bintang Indonesia, s.a."),
           $nomor_ISBN = array("ISBN 978-4-04-066220-6", "ISBN 978-1421585642", "ISBN 602-218-921-7", );

    public function InfoBuku() {
        return array($this->judul, $this->pengarang, $this->jenis, $this->penerbit, $this->nomor_ISBN);
    }
}
 
$get = new TokoBuku();
$info = $get -> InfoBuku();

echo $info[0][0] . " adalah " . $info[2][0] . " yang dibuat oleh " . $info[1][0] . " dan diterbitkan oleh " . $info[3][0] . " bernomor " . $info[4][0] . "\n\n";
echo $info[0][1] . " adalah " . $info[2][1] . " yang dibuat oleh " . $info[1][1] . " dan diterbitkan oleh " . $info[3][1] . " bernomor " . $info[4][1] . "\n\n";
echo $info[0][2] . " adalah " . $info[2][2] . " yang dibuat oleh " . $info[1][2] . " dan diterbitkan oleh " . $info[3][2] . " bernomor " . $info[4][2] . "\n\n";


?>