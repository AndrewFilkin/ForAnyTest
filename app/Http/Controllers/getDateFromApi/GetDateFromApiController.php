<?php

namespace App\Http\Controllers\getDateFromApi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class GetDateFromApiController extends Controller
{
    public function getParsingData()
    {
        $x = foo();
        dd($x);

        $client = new Client();
        $response = $client->request('GET', 'https://api.publicapis.org/entries');
        $datas = json_decode($response->getBody(), true);
        dd($datas['entries'][6]['API']);

    }
}
