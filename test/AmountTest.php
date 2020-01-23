<?php
namespace Rehmat\Test;

use PHPUnit\Framework\TestCase;
use Sample\ValueType\Amount;

class AmountTest extends TestCase
{
	public function test__isLessThan_works_as_expected()
	{
		$smallAmount = Amount::From(10);
		$largerAmount = Amount::From(1000);
		$this->assertTrue($smallAmount->IsLessThan($largerAmount));
		$this->assertFalse($largerAmount->IsLessThan($smallAmount));
	}

	public function test__isGreaterThan__works_as_expected()
	{
		$smallAmount = Amount::From(10);
		$largerAmount = Amount::From(1000);
		$this->assertTrue($largerAmount->IsGreaterThan($smallAmount));
		$this->assertFalse($smallAmount->IsGreaterThan($largerAmount));
	}

	public function test__isLessThanEqual__works_as_expected()
	{
		$smallAmount = Amount::From(100);
		$anotherAmount = Amount::From(100);
		$largerAmount = Amount::From(200);
		$this->assertTrue($smallAmount->IsLessThanEqualTo($largerAmount));
		$this->assertTrue($smallAmount->IsLessThanEqualTo($anotherAmount));
		$this->assertTrue($anotherAmount->IsLessThanEqualTo($smallAmount));
		$this->assertFalse($largerAmount->IsLessThanEqualTo($smallAmount));
	}

	public function test__isGreaterThanEqual__works_as_expected()
	{
		$amount = Amount::From(100);
		$largerAmount = Amount::From(1000);
		$anotherAmount = Amount::From(100);
		$this->assertTrue($amount->IsGreaterThanEqualTo($anotherAmount));
		$this->assertTrue($anotherAmount->IsGreaterThanEqualTo($amount));
		$this->assertFalse($amount->IsGreaterThanEqualTo($largerAmount));
		$this->assertFalse($anotherAmount->IsGreaterThanEqualTo($largerAmount));
		$this->assertTrue($largerAmount->IsGreaterThanEqualTo($amount));
		$this->assertTrue($largerAmount->IsGreaterThanEqualTo($anotherAmount));
	}

	public function test__equals_works_as_expected()
	{
		$amount = Amount::From(10);
		$nextAmount = Amount::From(10);
		$largerAmount = Amount::From(100);
		$this->assertTrue($amount->Equals($nextAmount));
		$this->assertFalse($amount->Equals($largerAmount));
	}
}