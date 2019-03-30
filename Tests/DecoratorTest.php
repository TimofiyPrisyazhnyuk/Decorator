<?php

namespace Tests;

use DoubleRoomBooking;
use ExtraBed;
use WiFi;

spl_autoload_register(function ($class) {
    include __DIR__ . '/../' . $class . '.php';
});

/**
 * Class DecoratorTest
 * @package Tests
 */
class DecoratorTest
{
    /**
     * Test Decorator.
     */
    public function test()
    {
        $booking = new DoubleRoomBooking();
        $booking = new WiFi($booking);
        $booking = new ExtraBed($booking);
        print_r($booking->calculatePrice());
        print_r($booking->getDescription());
    }
}

// Run test.
(new DecoratorTest())->test();