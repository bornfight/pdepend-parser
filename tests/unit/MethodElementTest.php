<?php

namespace Bornfight\PDependParser\Tests;

use Bornfight\PDependParser\Element\MethodElement;
use InvalidArgumentException;

class MethodElementTest extends \Codeception\Test\Unit
{
    /**
     * @var \App\Tests\UnitTester
     */
    protected $tester;

    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests
    public function testValidInitialization()
    {
        new MethodElement('validMethodName');
    }

    /**
     * @dataProvider InvalidMethodNameProvider
     */
    public function testInvalidInitialization($name)
    {
        $this->expectException(InvalidArgumentException::class);
        new MethodElement($name);
    }

    public function InvalidMethodNameProvider()
    {
        return [
            [''],
        ];
    }
}
