<?php
namespace Sample\ValueType;


class NegativeAmountException extends \Exception
{
	private $amount;

	/**
	 * NegativeAmountException constructor.
	 * @param $amount
	 */
	public function __construct($amount, $message = null) {
		parent::__construct($message ?? "Amount cannot be negative. {$amount} is negative.");
		$this->amount = $amount;
	}

	/**
	 * @return mixed
	 */
	public function getAmount() {
		return $this->amount;
	}
}