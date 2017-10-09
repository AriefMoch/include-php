<?php
include ("PublicFunction.php");


class Burung{

	// properties
	public $terbang=75;
	public $loncat=5;

	// methode setter values
	public function setTerbang (){
		$this -> terbang = $this -> terbang;
	} 

	public function setLoncat (){
		$this -> loncat = $this -> loncat;
	}

	// methode getter values
	public function getSpeedTerbang (){
		return $this -> terbang;
	}

	public function getSpeedloncat (){
		return $this -> loncat;
	}

}

// object
$emprit = new Burung();
echo "<br/>";
echo "<br/>";
var_dump($emprit);
echo "<br/>";
echo "Seekor Emprit Terbang Dengan Kecepatan" .$emprit -> getSpeedTerbang() ."km/jam";
echo "<br/>";
echo "Seekor Emprit Meloncat Dengan Kecepatan" .$emprit -> getSpeedloncat() ."km/jam";

/* 
output plus include php adalah :

object(Binatang)#1 (2) { ["lari"]=> int(50) ["loncat"]=> int(25) }
Seekor Luwak Berlari Dengan Kecepatan50km/jam
Seekor Luwak Meloncat Dengan Kecepatan25km/jam

object(Burung)#2 (2) { ["terbang"]=> int(75) ["loncat"]=> int(5) }
Seekor Emprit Terbang Dengan Kecepatan75km/jam
Seekor Emprit Meloncat Dengan Kecepatan5km/jam

*/


?>