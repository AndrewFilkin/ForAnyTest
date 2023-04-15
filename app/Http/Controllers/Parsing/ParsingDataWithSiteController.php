<?php

namespace App\Http\Controllers\Parsing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Sunra\PhpSimple\HtmlDomParser;

class ParsingDataWithSiteController extends Controller
{
    public function index()
    {
        return view('ParsingDataWithSite.index');
    }

    public function getParsingData()
    {
        $html = file_get_contents('https://prostoy.ru');

        // Создайте объект DOM на основе HTML-кода
        $dom = HtmlDomParser::str_get_html($html);


// find all image
        foreach($dom->find('img') as $e)
            echo $e->src . '<br>';

    }

}
