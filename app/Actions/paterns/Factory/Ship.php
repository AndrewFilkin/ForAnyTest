<?php


namespace App\Actions\paterns\Factory;

use App\Contracts\patern\Factory\Transport;


class Ship implements Transport
{
    public function deliver()
    {
        dd('deliver Ship');
    }
}