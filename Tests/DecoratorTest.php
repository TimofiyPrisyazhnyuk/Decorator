<?php

namespace DesignPatterns\Structural\Decorator\Tests;

use Decorator\DoubleRoomBooking;
use Decorator\ExtraBed;
use Decorator\WiFi;

require __DIR__ . "/../Booking.php";

foreach (glob("*.php") as $filename) {
    if (file_exists($file = __DIR__ . '/../' . $filename)) {
        require_once $file;
    }
}

class DecoratorTest
{
    public function test()
    {
        $booking = new DoubleRoomBooking();
        $booking = new WiFi($booking);
        $booking = new ExtraBed($booking);
        print_r($booking->calculatePrice());
        $booking->getDescription();
    }
}

(new DecoratorTest())->test();