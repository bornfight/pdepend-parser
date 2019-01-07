<?php

namespace Bornfight\PDependParser\Tests;

use Bornfight\PDependParser\Element\ClassElement;
use InvalidArgumentException;

class ClassElementTest extends \Codeception\Test\Unit
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
    public function testValidInitialzation()
    {
        new ClassElement("\Valid\Fq\Name");
    }

    /**
     * @dataProvider invalidFqNameProvider
     */
    public function testInvalidInitialization($name)
    {
        $this->expectException(InvalidArgumentException::class);
        new ClassElement($name);
    }

    public function invalidFqNameProvider(): array
    {
        return [
            [''],
        ];
    }
}
