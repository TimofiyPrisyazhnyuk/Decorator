<?php

/**
 * Class BookingDecorator
 */
abstract class BookingDecorator implements Booking
{
    /**
     * @var Booking
     */
    protected $booking;

    /**
     * BookingDecorator constructor.
     * @param Booking $booking
     */
    public function __construct(Booking $booking)
    {
        $this->booking = $booking;
    }
}
