<?php

namespace Bornfight\PDependParser\Tests;

use Bornfight\PDependParser\Parser\Parser;
use InvalidArgumentException;

class ParserTest extends \Codeception\Test\Unit
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
    public function testInitializationWithValidPath()
    {
        $parser = new Parser(__DIR__ . '/../_data/test_input.xml');
    }

    public function testInitializationWithInvalidPath()
    {
        $this->expectException(InvalidArgumentException::class);

        $parser = new Parser('invalid/file/path');
    }

}
