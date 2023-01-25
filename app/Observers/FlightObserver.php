<?php

namespace App\Observers;

use App\Models\Flight;

class FlightObserver
{

    public function retrieved(Flight $flight)
    {
        $flight->prueba = 'prueba';
    }

    public function creating(Flight $flight)
    {
        $flight->number = "123";
    }

    public function created(Flight $flight)
    {

    }

    public function updating(Flight $flight)
    {

    }

    public function updated(Flight $flight)
    {

    }

    public function saving(Flight $flight)
    {

    }

    public function saved(Flight $flight)
    {

    }

    public function deleting(Flight $flight)
    {

    }
}
