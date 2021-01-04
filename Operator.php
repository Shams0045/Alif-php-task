<?php
declare(strict_types=1);

class Operator
{
	public static function plus(float $numberOne = 1, float $numberTwo = 1): float
	{
		return $numberOne + $numberTwo;
	}

	public static function minus(float $numberOne = 1, float $numberTwo = 1): float
	{
		return $numberOne - $numberTwo;
	}

	public static function divide(float $numberOne = 1, float $numberTwo = 1): float
	{
		return $numberOne / $numberTwo;
	}

	public static function multiply(float $numberOne = 1, float $numberTwo = 1): float
	{
		return $numberOne * $numberTwo;
	}
}
