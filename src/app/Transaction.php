<?php

declare(strict_types=1);

namespace App;

class Transaction
{
	public const STATUS_PAID = 'paid';
	public const STATUS_PENDING = 'pending';
	public const STATUS_DECLINED = 'declined';

	private string $status = self::STATUS_PENDING;

	public function setStatus(string $status): self
	{
		$this->status = $status;
		return $this;
	}

	public function getStatus(): string
	{
		return $this->status;
	}
}
