<?php
use PHPUnit\Framework\TestCase;

class LowerCaseTest extends TestCase
{
    private $decorator;

    public function setUp()
    {
        $this->decorator = new Decorator\Pattern\LowerCase(new Decorator\Pen);
    }

    public function testUpperCased()
    {
        $this->assertEquals(strtolower(SOMETHING_TO_WRITE), $this->decorator->write(strtoupper(SOMETHING_TO_WRITE)));
    }
}