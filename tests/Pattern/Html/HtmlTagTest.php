<?php
use PHPUnit\Framework\TestCase;

class HtmlTagTest extends TestCase
{
    private $decorator;

    public function setUp()
    {
        $this->decorator = new Decorator\Pattern\Html\Bold(new Decorator\Pen);
    }

    public function testHtmlTag()
    {
        $this->assertEquals('<b>'.SOMETHING_TO_WRITE.'</b>', $this->decorator->write(SOMETHING_TO_WRITE));
    }
}