<?php
class Car{
	public $name;
	public $color;
	
	function set_name($name){
		$this->name=$name;
	}

	function get_name(){
		return $this->name;
	}
}
$audi=new Car();
$mercedez=new Car();
$audi->set_name("audi");
$mercedez->set_name("mercedez");
echo $audi->get_name();
echo"<br>";
echo $mercedez->get_name();
?>