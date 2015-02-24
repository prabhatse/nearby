<?php

/**
 *  @package    Asobiab\Nearby\Test
 *  @author     Coilo <coilo.dev@gmail.com>
 *  @license    MIT License
 *  @version    1.0.0
 *  @link       https://github.com/asobilab/nearby
 */

namespace Asobilab\Nearby\Test;

use Asobilab\Nearby\Nearby;
use Asobilab\Nearby\Location;

/**
 *  Nearby testcase.
 */
class NearbyTest extends  \PHPUnit_Framework_TestCase
{
    public function testVersion()
    {
        $this->assertEquals("0.0.1", Nearby::VERSION);
    }

    public function testLocation()
    {
        $location = new Location(35.65858, 139.745433);
        $actual = $location->getCoordinate();
        $this->assertEquals(35.65858, $actual['latitude']);
        $this->assertEquals(139.745433, $actual['longitude']);
    }
}
