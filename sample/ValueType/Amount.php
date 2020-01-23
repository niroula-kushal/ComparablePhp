<?php
namespace Sample\ValueType;

use Rehmat\Comparable\AbstractComparable;
use Rehmat\Comparable\IComparable;

class Amount extends AbstractComparable
{
	private $value;
	public function __construct($amount) {
		if($amount < 0) throw new  NegativeAmountException($amount);
		$this->value = $amount;
	}

	/**
	 * @return mixed
	 */
	public function getValue() {
		return $this->value;
	}

	public static function From($amount) {
		return new self($amount);
	}

	/**
	 * @inheritDoc
	 */
	function Compare(IComparable $obj): int {
		return bccomp($this->getValue(), $obj->getValue());// $this->getValue() <=> $obj->getValue();
	}
}