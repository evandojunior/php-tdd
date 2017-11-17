<?php

namespace App\Tests;

use App\Door;

class DoorTest extends \PHPUnit_Framework_TestCase
{
    public function testDoorIsOpen()
    {
        $door = new Door();
        $door->setState(true);
        $this->assertTrue($door->getState());
    }

    public function testDoorIsClosed()
    {
        $door = new Door();
        $door->setState(false);
        $this->assertFalse($door->getState());
    }
}
