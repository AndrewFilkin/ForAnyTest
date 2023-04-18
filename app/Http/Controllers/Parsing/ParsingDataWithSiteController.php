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

        // find all link
        foreach ($dom->find('a') as $e)
            echo $e->href . '<br>';

// find all image
        foreach ($dom->find('img') as $e)
            echo $e->src . '<br>';

// find all image with full tag
        foreach ($dom->find('img') as $e)
            echo $e->outertext . '<br>';

// find all div tags with id=gbar
        foreach ($dom->find('div#gbar') as $e)
            echo $e->innertext . '<br>';

// find all span tags with class=gb1
        foreach ($dom->find('span.gb1') as $e)
            echo $e->outertext . '<br>';

// find all td tags with attribite align=center
        foreach ($dom->find('td[align=center]') as $e)
            echo $e->innertext . '<br>';

        echo '-------------------------------' . '<br>';
        foreach ($dom->find('span') as $key => $e) {
            if ($key == 2) {
                echo $e->outertext . '<br>';
            }
        }

// extract text from table
//        echo $dom->find('td[align="center"]', 1)->plaintext . '<br><hr>';

// extract text from HTML
//        echo $dom->plaintext;


    }

}
