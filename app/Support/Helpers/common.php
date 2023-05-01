<?php
use Illuminate\Support\Facades\DB;
use Closure;

if (!function_exists('transaction')) {
    function transaction(Closure $callback, $attempts = 1): mixed
    {
        if(DB::transactionLevel() > 0) {
            return $callback;
        }
        return DB::transaction($callback, $attempts);
    }
}
