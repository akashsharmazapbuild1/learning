<?php
class Atm{
	private $custid;
	private $atmpin;
	public function Pinchange($custid, $atmpin){
		echo "function to pinchange".$custid "for user".$atmpin;
		echo "<br>";
	}
	public function ministatement($custid){
		echo "function to check ministatement".$custid;
		echo "<br>"
	}
	public function checkbalance($custid,$atmpin){
		echo "function to checkbalance".$custid "for user"$atmpin;
	}
}
$obj=new Atm();
$obj->checkbalance("1234","****");
?>