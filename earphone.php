<?php
class earphone {
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
	$Philips = new earphone();
	$Philips ->SetMerk('Philips');
	$Philips ->SetType('SHE3015');
	$Philips ->SetHarga(250000);
	$Philips ->cetak();
	echo '<br>';
	echo '<br>';
	$Sennheiser = new earphone();
	$Sennheiser ->SetMerk('Sennheiser');
	$Sennheiser ->SetType('MX170');
	$Sennheiser ->SetHarga(280000);
	$Sennheiser ->cetak();
	echo '<br>';
	echo '<br>';
	$Technica = new earphone();
	$Technica ->SetMerk('Technica');
	$Technica ->SetType('ATH-CLR100is');
	$Technica ->SetHarga(590000);
	$Technica ->cetak();
	echo '<br>';
	echo '<br>';
	$SoundBuds = new earphone();
	$SoundBuds ->SetMerk('SoundBuds');
	$SoundBuds ->SetType('IE10');
	$SoundBuds ->SetHarga(1600000);
	$SoundBuds ->cetak();
	echo '<br>';
	echo '<br>';
	$AKG = new earphone();
	$AKG ->SetMerk('AKG');
	$AKG ->SetType('EO-IG955');
	$AKG ->SetHarga(800000);
	$AKG ->cetak();
?>