<?php
class keyboard {
	var $merk;
	var $type;
	var $harga;

	public function SetMerk($merk=''){
		$this->merk = $merk;
	}

	public function SetType($type=''){
		$this->type = $type;
	}

	public function Setharga($harga=''){
		$this->harga = $harga;
	}


	public function cetak(){
		echo 'merk:'.$this->merk;
		echo '<br>';
		echo 'type:'.$this->type;
		echo '<br>';
		echo 'harga:'.$this->harga;
		echo '<br>';
	}
}
	$Rexsus = new keyboard();
	$Rexsus ->SetMerk('Rexsus');
	$Rexsus ->SetType('MX1');
	$Rexsus ->SetHarga(545000);
	$Rexsus ->cetak();
	echo '<br>';
	echo '<br>';
	$MicroPack = new keyboard();
	$MicroPack ->SetMerk('Micro Pack');
	$MicroPack ->SetType('K-3204');
	$MicroPack ->SetHarga(155000);
	$MicroPack ->cetak();
	echo '<br>';
	echo '<br>';
	$Logitech = new keyboard();
	$Logitech ->SetMerk('Logitech');
	$Logitech ->SetType('MK220');
	$Logitech ->SetHarga(180000);
	$Logitech ->cetak();
	echo '<br>';
	echo '<br>';
	$Lenovo = new keyboard();
	$Lenovo ->SetMerk('Lenovo');
	$Lenovo ->SetType('M320');
	$Lenovo ->SetHarga(650000);
	$Lenovo ->cetak();
	echo '<br>';
	echo '<br>';
	$Samsung = new keyboard();
	$Samsung ->SetMerk('Samsung');
	$Samsung ->SetType('KK90');
	$Samsung ->SetHarga(250000);
	$Samsung ->cetak();
?>