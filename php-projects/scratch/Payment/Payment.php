<?php

class Payment {
	protected float $amount;
	public static float $total = 0;

	public function __construct($amount) {
		$this->amount = $amount;

		self::$total += $amount;
	}

	public function process() : string{
		return "Processing a generic payment of $this->amount.";
	}
}