<?php
namespace Akash{
	class Xyz{
		public function__construct()
		{
			echo "Xyz from Akash Namespace";
		}
	}
}
namespace{
	class Xyz{
		public function__construct()
		{
			echo" Xyz from global namespace"
		}
	}
	$obj=new Xyz();
}