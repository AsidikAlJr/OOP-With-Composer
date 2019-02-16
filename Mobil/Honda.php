<?php 
	namespace Dummy\Mobil;

	class Honda extends Mobil
	{
		protected $efisiensi = 150;

		public function getEfisiensi()
		{
			return $this->efisiensi;
		}

	}