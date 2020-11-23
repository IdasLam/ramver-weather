<?php

// namespace Anax\Controller;
namespace idla\Weather;

// use Anax\DI\DIFactoryConfig;
// use Anax\Response\ResponseUtility;
use PHPUnit\Framework\TestCase;
// use Anax\DI\DIMagic;

/**
 * Test the SampleController.
 */
class WeatherControllerTest extends TestCase
{   
    public function testInit()
    {
        $weather = new Weather();
        $weather->init("56.1616", "15.5866");

        $res = $weather->getRaw();

        $this->assertEquals($res === null, false);
    }

    public function testWeek()
    {
        $weather = new Weather();
        $weather->init("56.1616", "15.5866");

        $res = $weather->getWeek();

        $this->assertEquals($res === null, false);
    }

    public function testHistory()
    {
        $weather = new Weather();
        $weather->init("56.1616", "15.5866");

        $res = $weather->getHistory();

        $this->assertEquals($res === null, false);
    }
}
