<?php


namespace App\Actions\paterns\Factory;

use App\Contracts\patern\Factory\Transport;

class Truck implements Transport
{
    public function deliver()
    {
        dd('deliver Truck');
    }
}