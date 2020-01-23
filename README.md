# ComparablePhp

Library for comparing value types.

# Usage

You need to extend `Rehmat\Comparable\AbstractComparable` using your value type.

There is an abstract method `compare` that you need to implement.

After that, you can compare your value types using methods like `Equals`, `IsGreaterThan`, `IsGreaterThanEqualTo`, `IsLessThan`, `IsLessThanEqualTo`


When you are implementing the compare method, the method must return in the following way 

	 * RESULT 	CASE
	 * -1		If current object is less than passed object
	 * 0	    If they are equal
	 * 1		If current object is greater than passed object
	 

# Example

There is a sample implementation of Amount in Sample/ValueType directory.

```php
$amount1 = Amount::From(10);
$amount2 = Amount::From(30);

$amount1->IsLessThan($amount2); //true
$amount1->IsGreaterThan($amount2); //false
