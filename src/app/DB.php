<?php

namespace App;

class DB
{
	private static ?DB $instance = null;

	public function __construct(
		private array $config
	) {}

	public static function getInstance(array $config): DB
	{
		if (self::$instance === null) {
			self::$instance = new DB($config);
		}

		return self::$instance;
	}
}
