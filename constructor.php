<?php
class Demo{
	public $college;
	public $branch;
	function__construct($college,$branch)
	{
		$this->college=$college;
		$this->brach=$branch;
	}
	public function display()
	{
		echo "college":"$this->college".<br>
		echo "branch":"$this->branch".
	}
}
$obj=new Demo("SRM","CSE");
$obj=display();
?>