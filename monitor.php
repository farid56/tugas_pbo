<?php
class monitor {
	var $merk;
	var $ukuran;
	var $type;

	public function SetMerk($merk=''){
		$this->merk = $merk;
	}
	public function SetUkuran($ukuran=''){
		$this->ukuran = $ukuran;
	}
	public function SetType($type=''){
		$this->type = $type;
	}

	public function cetak(){
		echo 'merk:'.$this->merk;
		echo '<br>';
		echo 'ukuran:'.$this->ukuran;
		echo '<br>';
		echo 'type:'.$this->type;
	}
}
	$ASUS = new monitor();
	$ASUS ->SetMerk('ASUS');
	$ASUS ->SetUkuran(15.6 .'Inch');
	$ASUS ->SetType('C');
	$ASUS ->cetak();

?>