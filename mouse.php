<?php
class mouse {
	var $merk;
	var $type;
	var $resolusi;
	var $harga;

	public function SetMerk($merk=''){
		$this->merk = $merk;
	}
	public function SetType($type=''){
		$this->type = $type;
	}
	public function SetResolusi($resolusi=''){
		$this->resolusi = $resolusi;
	}
	public function SetHarga($harga=''){
		$this->harga = $harga;
	}

	public function cetak(){
		echo 'merk:'.$this->merk;
		echo '<br>';
		echo 'type:'.$this->type;
		echo '<br>';
		echo 'resolusi:'.$this->resolusi;
		echo '<br>';
		echo 'harga:'.$this->harga;
		echo '<br>';
	}
}
	$ZYREX = new mouse();
	$ZYREX ->SetMerk('ZYREX');
	$ZYREX ->SetType('ZA335');
	$ZYREX ->SetResolusi('1000Dpi');
	$ZYREX ->SetHarga(110000);
	$ZYREX ->cetak();
	echo '<br>';
	echo '<br>';
	$ASUS = new mouse();
	$ASUS ->SetMerk('ASUS');
	$ASUS ->SetType('P304 TUF');
	$ASUS ->SetResolusi('6200Dpi');
	$ASUS ->SetHarga(300000);
	$ASUS ->cetak();
	echo '<br>';
	echo '<br>';
	$Logitech = new mouse();
	$Logitech ->SetMerk('Logitech');
	$Logitech ->SetType('G903');
	$Logitech ->SetResolusi('12000Dpi');
	$Logitech ->SetHarga(2500000);
	$Logitech ->cetak();
	echo '<br>';
	echo '<br>';
	$HP = new mouse();
	$HP ->SetMerk('HP');
	$HP ->SetType('2VP02AA');
	$HP ->SetResolusi('16000Dpi');
	$HP ->SetHarga(920000);
	$HP ->cetak();
	echo '<br>';
	echo '<br>';
	$DELL = new mouse();
	$DELL ->SetMerk('DELL');
	$DELL ->SetType('WM126');
	$DELL ->SetResolusi('1000Dpi');
	$DELL ->SetHarga(150000);
	$DELL ->cetak();
?>