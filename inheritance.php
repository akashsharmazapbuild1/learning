<?php
class Gender{
	public $name;
	public $color;
	public function_construct($name,$color)
	{
		$this->name=$name;
		$this->color=$color;
	}
	public function dekho()
	{
		echo "the boy is{this->name} and the color is {this->color}";
	}
}
class Girl extends Boy{
	public function dekhomat()
	{
		echo "am i a boy or a girl";
	}
}
$girl=new Girl("girl","fair");
$girl->dekhomat();
$girl->dekho();
?>