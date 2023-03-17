<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class FunctionTest extends TestCase
{
  public function testEmail(): void
  {
    $result = validate_email('olivarjoseluis9@gmail.com');
    $this->assertTrue($result);
  }
}
