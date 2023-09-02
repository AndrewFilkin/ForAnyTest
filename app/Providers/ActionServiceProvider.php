<?php

namespace App\Providers;

use App\Actions\TestAction;
use App\Contracts\TestContract;
use Illuminate\Support\ServiceProvider;
use App\Actions\AutocompleteSearchAction;
use App\Contracts\AutocompleteSearchContract;
use App\Contracts\patern\Factory\Transport;
use App\Actions\paterns\Factory\Ship;



class ActionServiceProvider extends ServiceProvider
{
   public $bindings = [
       AutocompleteSearchContract::class => AutocompleteSearchAction::class,
       TestContract::class => TestAction::class,
       // Pattern Factory
       Transport::class => Ship::class,

   ];
}
