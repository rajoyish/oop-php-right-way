<?php

namespace App;

class Formatter
{
	public static function formatCurrency(float $amount): string
	{
		return number_format($amount, 2);
	}
}
