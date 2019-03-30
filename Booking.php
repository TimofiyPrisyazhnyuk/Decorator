<?php

/**
 * Interface Booking
 */
interface Booking
{
    /**
     * @return int
     */
    public function calculatePrice(): int;

    /**
     * @return string
     */
    public function getDescription(): string;
}
