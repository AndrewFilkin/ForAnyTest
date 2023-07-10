<?php


namespace App\Contracts;


use Illuminate\Http\Request;

interface GenerateShortLinkContract
{
    public function makeShortLink($fullLink, $generateCode);

    public function saveLinksToDatabase($fullLink, $short_code, $description);

    public function update(Request $request, $code, $short_code);
}
