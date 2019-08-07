<?php
class sound {
	var $merk;
	var $type;
	var $harga;

	public function SetMerk($merk=''){
		$this->merk = $merk;
	}
	public function SetType($type=''){
		$this->type = $type;
	}
	public function SetHarga($harga=''){
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
	$Logitech = new sound();
	$Logitech ->SetMerk('Logitech');
	$Logitech ->SetType('Z313');
	$Logitech ->SetHarga(360000);
	$Logitech ->cetak();
	echo '<br>';
	echo '<br>';
	$Edifier = new sound();
	$Edifier ->SetMerk('Edifier');
	$Edifier ->SetType('M1370');
	$Edifier ->SetHarga(750000);
	$Edifier ->cetak();
	echo '<br>';
	echo '<br>';
	$Microlab = new sound();
	$Microlab ->SetMerk('Microlab');
	$Microlab ->SetType('TMN-9U');
	$Microlab ->SetHarga(805000);
	$Microlab ->cetak();
	echo '<br>';
	echo '<br>';
	$Simbadda = new sound();
	$Simbadda ->SetMerk('Simbabda');
	$Simbadda ->SetType('CST 6400N');
	$Simbadda ->SetHarga(550000);
	$Simbadda ->cetak();
	echo '<br>';
	echo '<br>';
	$Dazumba = new sound();
	$Dazumba ->SetMek('Dazumba');
	$Dazumba ->SetType('DW366');
	$Dazumba ->SetHarga(550000);
	$Dazumba ->cetak();
?>