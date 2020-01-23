<?php
namespace Rehmat\Comparable;

interface IComparable
{
	/**
	 * @param IComparable $obj
	 * @return int Result of the comparision
	 * RESULT 	CASE
	 * -1		If current object is less than passed object
	 * 0	    If they are equal
	 * 1		If current object is greater than passed object
	 */
	function Compare(self $obj) : int;
	function IsGreaterThan(self $obj) : bool;
	function IsLessThan(self $obj) : bool;
	function Equals(self $obj);
	function IsGreaterThanEqualTo(self $obj);
	function IsLessThanEqualTo(self $obj);
}