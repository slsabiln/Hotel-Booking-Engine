<?php

use Illuminate\Support\Facades\Schema;
use Slsabil\LaravelHotelBooking\Tests\TestCase;

uses(TestCase::class);

test('bookings table is created by migration', function () {
    $this->artisan('migrate');

    expect(Schema::hasTable('bookings'))->toBeTrue();
});
