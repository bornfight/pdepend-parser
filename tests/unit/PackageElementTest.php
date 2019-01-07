<?php

namespace Bornfight\PDependParser\Tests;

use Bornfight\PDependParser\Element\PackageElement;
use InvalidArgumentException;

class PackageElementTest extends \Codeception\Test\Unit
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
        new PackageElement("\Valid\Package\Name");
    }

    /**
     * @dataProvider InvalidPackageNameProvider
     */
    public function testInvalidInitialization($name)
    {
        $this->expectException(InvalidArgumentException::class);
        new PackageElement($name);
    }

    public function InvalidPackageNameProvider()
    {
        return [
            [''],
        ];
    }
}
