<?php
namespace Rehmat\Comparable;

abstract class AbstractComparable implements IComparable
{

	function IsGreaterThan(IComparable $obj): bool {
		return $this->Compare($obj) === 1;
	}

	function IsLessThan(IComparable $obj): bool {
		return $this->Compare($obj) === -1;
	}

	function Equals(IComparable $obj) {
		return $this->Compare($obj) === 0;
	}

	function IsGreaterThanEqualTo(IComparable $obj) {
		return $this->IsGreaterThan($obj) || $this->Equals($obj);
	}

	function IsLessThanEqualTo(IComparable $obj) {
		return !$this->IsGreaterThan($obj);
	}
}