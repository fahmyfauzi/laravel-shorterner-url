<?php

namespace App\Http\Controllers;

use App\Models\Url;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class UrlController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function store(Request $request)
    {
        //validasi input
        $data = $request->validate([
            'url' => ['required', 'active_url']
        ]);

        //menyiapkan random string
        $randomString = Str::random(6);

        //menyimpan ke database
        $shortUrl = new Url([
            'alias' => $randomString,
            'url' => $data['url'],
        ]);
        $shortUrl->save();

        $result = url($randomString);

        return to_route('url.index')->with('result', $result);
    }
    public function redirect(string $alias)
    {
        $shortUrl = Url::where('alias', $alias)->first();

        if (!$shortUrl) abort(404);

        return redirect()->away($shortUrl->url);
    }
}
