<?php
class College{
	public $name;
	protected $branch;
	private $adress;
	public function set_name($m){
		$this->name=$m;
		echo $this->name;
	}
		protected function set_name($m){
			$this->name=$m;
			echo $this->name;
		}
		private function set name($m){
			$this->name=$m;
			echo $this->name;
	}
}
$srm=new College();
$srm->set_name("srm");
?>