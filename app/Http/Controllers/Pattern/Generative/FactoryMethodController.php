<?php

namespace App\Http\Controllers\Pattern\Generative;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\Contracts\patern\Factory\Transport;


/**
 * use class Action AutocompleteSearchAction
 * @see \App\Actions\paterns\Factory\Truck
 */
class FactoryMethodController extends Controller
{
    public function index(Transport $transport)
    {
        dd($transport->deliver());
    }
}
