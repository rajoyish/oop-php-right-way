<?php

declare(strict_types=1);

namespace App;

class Transaction
{
	public static int $count = 0;

	public function __construct(
		public int $amount,
		public string $description
	) {
		self::$count++;
	}

	public static function getCount(): int
	{
		return self::$count;
	}

	public function process()
	{
		echo "Processing transaction of $this->amount for $this->description.";
	}
}
