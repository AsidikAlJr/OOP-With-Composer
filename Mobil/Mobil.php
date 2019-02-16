<?php 

	namespace Dummy\Mobil;

	abstract class Mobil
	{
		protected $merk = '';
		protected $bbm = 0;
		public function __construct(string $merk, int $bbm)
		{
			$this->merk = $merk;
			$this->bbm = $bbm;
		}

		public function getMerk()
		{
			return $this->merk;
		}

		public function getBbm()
		{
			return $this->bbm;
		}
	}
