<?php

namespace App\Services\CreateShortLink;

use App\Models\ShortLink;
use Illuminate\Http\Request;

class GenerateShortLink
{

    protected $shortLink;

    public function makeShortLink($fullLink, $generateCode)
    {
        $str = $fullLink;
        $cut = substr($str, 0, 8);
        $this->shortLink = $cut . $generateCode;
        return $cut . $generateCode;
    }

    public function saveLinksToDatabase($fullLink, $short_code, $description)
    {
        ShortLink::create([
            'main_link' => $fullLink,
            'short_code_link' => $this->shortLink,
            'code' => $short_code,
            'description' => $description,
        ]);
    }

    public function update(Request $request, $code, $short_code)
    {
        ShortLink::where('code', $code)->update([
            'main_link' => $request->input('main_link'),
            'short_code_link' => $short_code,
            'code' => $request->input('short_code'),
            'description' => $request->input('description'),
        ]);
    }

    public function delete($code)
    {
        ShortLink::where('code', $code)->delete();
    }

    public function redirect($code)
    {
        $main_link = ShortLink::where('code', $code)->get('main_link');
        return $main_link;
    }

}
