<?php

// 1 _ nurodomi argumentai konstruktoriuje 
class Calculator
{
	// 3 _ parasoma, kad klase gali tureti propercius (savybes)
	private $num1;
	private $num2;
	// 2 _ kontruktorius visuomet rasomas su space ir 2 apatiniais bruksniais
	function __construct($num1, $num2)
	{
		// 4 _ nustatomos properciu reiksmes is argumentu
		$this->num1 = $num1;
		$this->num2 = $num2;
	}

	// 5 _ nurodomi 4 matematiniai metodai
	public function add()
	{
		return $this->num1 + $this->num2;
	}

	public function subtract()
	{
		return $this->num1 - $this->num2;
	}

	public function multiply()
	{
		return $this->num1 * $this->num2;
	}

	public function divide()
	{
		return $this->num1 / $this->num2;
	}
}
