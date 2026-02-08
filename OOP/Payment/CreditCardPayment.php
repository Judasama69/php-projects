<?php
require_once 'Payment.php';

class CreditCardPayment extends Payment {
	private $cardNumber;

	public function __construct($amount ,$cardNumber){
		parent::__construct($amount);
		$this->cardNumber = $cardNumber;
	}

	#[Override]
	public function process(): string {
		$lastfour = substr($this->cardNumber, -4);
		return "Charging {$this->amount} to Card ending in {$lastfour}.";
	}


}