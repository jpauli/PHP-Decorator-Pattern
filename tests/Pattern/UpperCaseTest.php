<?php
use PHPUnit\Framework\TestCase;

class UpperCaseTest extends TestCase
{
    private $decorator;

    public function setUp()
    {
        $this->decorator = new Decorator\Pattern\UpperCase(new Decorator\Pen);
    }

    public function testUpperCased()
    {
        $this->assertEquals(strtoupper(SOMETHING_TO_WRITE), $this->decorator->write(SOMETHING_TO_WRITE));
    }
}