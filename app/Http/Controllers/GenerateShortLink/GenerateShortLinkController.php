<?php

namespace App\Http\Controllers\GenerateShortLink;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\CreateShortLink\GenerateShortLink;
use App\Models\ShortLink;


class GenerateShortLinkController extends Controller
{
    public function index()
    {
        $shortLink = ShortLink::paginate(10);
        return view('GenerateLink.index', ['items' => $shortLink]);
    }

    public function createAndSaveShortLink(Request $request)
    {

        $obj = new GenerateShortLink();
        $shortLink = $obj->makeShortLink($request->input('main_link'), $request->input('short_code'));
        $obj->saveLinksToDatabase($request->input('main_link'), $request->input('short_code'), $request->input('description'));
        return redirect('/generate-short-link');

    }

    public function updateShortLinkIndex($code)
    {
        $page = ShortLink::where('code', $code)->firstOrFail();
        return view('GenerateLink.editLink', ['items' => $page]);
    }

    public function updateShortLink(Request $request, $id)
    {
        $obj = new GenerateShortLink();
        $shortLink = $obj->makeShortLink($request->input('main_link'), $request->input('short_code'));
        $obj = new GenerateShortLink();
        $obj->update($request, $id, $shortLink);
        return redirect('/generate-short-link');
    }
    public function deleteShortLink($code)
    {
        $obj = new GenerateShortLink();
        $obj->delete($code);
        return redirect('/generate-short-link');
    }

    public function redirectShortLink ($code) {
        $obj = new GenerateShortLink();
        $mainLink = $obj->redirect($code);
        $link = $mainLink[0]->main_link;
        return redirect($link);
    }

}
