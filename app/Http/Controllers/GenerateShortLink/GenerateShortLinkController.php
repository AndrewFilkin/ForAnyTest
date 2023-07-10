<?php

namespace App\Http\Controllers\GenerateShortLink;

use App\Contracts\GenerateShortLinkContract;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ShortLink;


class GenerateShortLinkController extends Controller
{
    public function index()
    {
        $shortLink = ShortLink::paginate(10);
        return view('GenerateLink.index', ['items' => $shortLink]);
    }

    public function createAndSaveShortLink(Request $request, GenerateShortLinkContract $service)
    {

        $shortLink = $service->makeShortLink($request->input('main_link'), $request->input('short_code'));
        $service->saveLinksToDatabase($request->input('main_link'), $request->input('short_code'), $request->input('description'));
        return redirect('/generate-short-link');

    }

    public function updateShortLinkIndex($code)
    {
        $page = ShortLink::where('code', $code)->firstOrFail();
        return view('GenerateLink.editLink', ['items' => $page]);
    }

    public function updateShortLink(Request $request, $id, GenerateShortLinkContract $service)
    {
        $shortLink = $service->makeShortLink($request->input('main_link'), $request->input('short_code'));
        $service->update($request, $id, $shortLink);
        return redirect('/generate-short-link');
    }
    public function deleteShortLink($code, GenerateShortLinkContract $service)
    {
        $service->delete($code);
        return redirect('/generate-short-link');
    }

    public function redirectShortLink ($code, GenerateShortLinkContract $service) {
        $mainLink = $service->redirect($code);
        $link = $mainLink[0]->main_link;
        return redirect($link);
    }

}
