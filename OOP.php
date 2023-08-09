<?php
class lingkaran{
    var float $jarijari;
    var float $scale;
    public function area(float $jarijari){
        echo "Luas lingkaran dengan jari-jari ".$jarijari."cm adalah ".$jarijari* $jarijari * 3.14."cm kuadrat \n"; 
    }
    public function circumference(float $jarijari){
        echo "Keliing lingkaran dengan jari-jari ".$jarijari."cm adalah ".$jarijari* 2* 3.14."cm \n"; 
    }
    public function enlarge(float $jarijari, float $scale){
        echo "Enlarge lingkaran dengan jari-jari ".$jarijari."cm dan Scale:".$scale." adalah ".$jarijari* $scale."cm \n"; 
    }
    public function shrink(float $jarijari, float $scale){
        echo "Shrink lingkaran dengan jari-jari ".$jarijari."cm dan Scale:".$scale." adalah ".$jarijari/$scale."cm \n"; 
    }
}
class persegi{
    var float $sisi;
    var float $scale;
    public function area(float $sisi){
        echo "Luas persegi dengan sisi ".$sisi."cm adalah ".$sisi*$sisi."cm kuadrat \n"; 
    }
    public function circumference(float $sisi){
        echo "Keliing persegi dengan sisi ".$sisi."cm adalah ".$sisi*4 . "cm \n"; 
    }
    public function enlarge(float $sisi, float $scale){
        echo "Enlarge persegi dengan sisi ".$sisi."cm dan Scale:".$scale." adalah ".$sisi* $scale."cm \n"; 
    }
    public function shrink(float $sisi, float $scale){
        echo "Shrink persegi dengan sisi ".$sisi."cm dan Scale:".$scale." adalah ".$sisi/$scale."cm \n"; 
    }
}
class persegi_panjang{
    var float $panjang;
    var float $plebar;
    var float $scale;
    public function area(float $panjang, float $lebar){
        echo "Luas persegi dengan panjang ".$panjang."cm dan lebar ".$lebar. "cm adalah ".$panjang*$lebar."cm kuadrat \n"; 
    }
    public function circumference(float $panjang ,float $lebar){
        echo "keliling persegi dengan panjang ".$panjang."cm dan lebar ".$lebar. "cm adalah ".($panjang+$lebar) * 2 ."cm \n"; 
    }
    public function enlarge(float $panjang, float $lebar, float $scale){
        echo "enlarge scale:". $scale." persegi panjang dengan panjang ".$panjang."cm dan lebar ".$lebar. "cm adalah panjang: ".$panjang * $scale ."cm dan lebar:". $lebar*$scale ."cm \n"; 
    }
    public function shrink(float $panjang, float $lebar, float $scale){
        echo "shrink scale:". $scale." persegi panjang dengan panjang ".$panjang."cm dan lebar ".$lebar. "cm adalah panjang: ".$panjang / $scale ."cm dan lebar:". $lebar/$scale ."cm \n"; 
    }
}
class descriptor{
    public function lingkaran(){
        echo "Bangun datar ini adalah Lingkaran yang memiliki luas r x r x phi dan keliling 2 x r x phi \n";
    }
    public function persegi(){
        echo "Bangun datar ini adalah persegi yang memiliki luas s x s dan keliling 4 x s \n";
    }
    public function persegipanjang(){
        echo "Bangun datar ini adalah persegi panjang yang memiliki luas p x l dan keliling (p + l) x 2 \n";
    }
}
/*
berikut merupakan Akses Object terhadap masing-masing class

$lingkaran = new lingkaran();
$lingkaran->area(2);
$lingkaran->circumference(2);
$lingkaran->enlarge(20,4);
$lingkaran->shrink(20,4);
$persegi = new persegi();
$persegi->area(2);
$persegi->circumference(2);
$persegi->enlarge(20,4);
$persegi->shrink(20,4);
$persegipanjang = new persegi_panjang();
$persegipanjang->area(2,4);
$persegipanjang->circumference(2,4);
$persegipanjang->enlarge(2,4,5);
$persegipanjang->shrink(20,40,5);
$descriptor = new descriptor();
$descriptor->lingkaran();
$descriptor->persegi();
$descriptor->persegipanjang();*/