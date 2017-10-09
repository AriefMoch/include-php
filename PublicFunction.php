<?php

class Binatang{

	// properties
	public $lari=25;
	public $loncat=50;

	// methode setter values
	public function setLari ($r){
		$this -> lari = $this -> lari + $r; 
	} 

	public function setLoncat ($t){
		$this -> loncat = $this -> loncat - $t;
	}

	// methode getter values
	public function getSpeedlari (){
		return $this -> lari;
	}

	public function getSpeedloncat (){
		return $this -> loncat;
	}

}

// object
$luwak = new Binatang();
$luwak -> setLari (25); // 50 km/jam
$luwak -> setLoncat (25); // 25 km/jam
var_dump($luwak);
echo "<br/>";
echo "Seekor Luwak Berlari Dengan Kecepatan" .$luwak -> getSpeedlari() ."km/jam";
echo "<br/>";
echo "Seekor Luwak Meloncat Dengan Kecepatan" .$luwak -> getSpeedloncat() ."km/jam";

/* 
output
object(Binatang)#1 (2) { ["lari"]=> int(50) ["loncat"]=> int(25) }
Seekor Luwak Berlari Dengan Kecepatan50km/jam
Seekor Luwak Meloncat Dengan Kecepatan25km/jam
*/

/* 
Sebuah properties atau methode dinyatakan sebagai public, maka seluruh kode program di luar class bisa mengaksesnya
termasuk class turunan
*/	

?>