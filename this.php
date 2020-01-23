<?php
class Akash{
	publlic static function getCollegeName(){
		return "SRM";
	}
}
class Akash1 extends Akash{
	public $CollegeName;
	public function__construct(){
		$this->CollegeName=parent::getCollegeName;
	}
}
$Akash1=new Akash1;
echo "$Akash1->CollegeName";
?>