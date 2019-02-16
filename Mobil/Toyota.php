<?php 
	
	namespace Dummy\Mobil;

	class Toyota extends Mobil
	{
		protected $efisiensi = 100;
		
		public function getEfisiensi()
		{
			return $this->efisiensi;
		}
	}