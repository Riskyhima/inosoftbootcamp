<?php
echo <<<soal
Cetaklah angka baris demi baris dari 1 hingga 100.

Untuk angka kelipatan 3 memanggil function luas lingkaran dengan jari-jari dari angka tersebut dibagi 3 dan mencetak hasil luasnya.

Untuk kelipatan 5 memanggil function keliling lingkaran dengan jari-jari dari angka tersebut dibagi 5 dan mencetak hasil kelilingnya, apabila angka tersebut kelipatan 3 dan 5 maka memanggil function luas persegi dengan panjang angka tersebut dibagi 3 dan lebar angka tersebut dibagi 5. 

Semua angka menggunakan 2 angka dibelakang koma. Note: nilai pi = 3.14

soal;

for($i=1;$i<101;$i++){
    if ($i % 15 == 0){
        luas_persegipanjang($i);
    }
    else if($i % 5 == 0){
        keliling($i);
    }
    else if($i % 3 == 0){
        luas($i);
    }
    else{
    $hasil = number_format($i,2,'.','');
    echo "angka =".$hasil."\n"; 
    }
  
}
function luas($i){
    $luas = 3.14 * ($i/3) * ($i/3);
    $hasil_luas = number_format($luas,2,'.','');
    echo "Luas Lingkaran dengan jari-jari ".$i."= ".$hasil_luas."\n";
}
function luas_persegipanjang($i){
    $luas_persegipanjang =  ($i/3) * ($i/5);
    $hasil_luas_persegipanjang = number_format($luas_persegipanjang,2,'.','');
    echo "Luas persegi panjang dengan jari-jari ".$i."= ".$hasil_luas_persegipanjang."\n";
}
function keliling($i){
    $kel = 3.14 * ($i/5) * 2;
    $hasil_kel = number_format($kel,2,'.','');
    echo "Keliling Lingkaran dengan jari-jari ".$i."= ".$hasil_kel."\n";
}