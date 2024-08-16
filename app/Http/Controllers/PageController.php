<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PageController extends Controller
{
    public function lyrium()
    {
        $routeName = request()->route()->getName();
        $json = Storage::get('links.json');
        $links = json_decode($json, true);
        $link = $links[$routeName] ?? [];

        session($link);

        return view('pages.lyrium');
    }

    public function healthcare($nivel)
    {
        $json = Storage::get('links.json');
        $links = json_decode($json, true);
        $link = $links[$nivel] ?? [];

        session($link);

        return view('pages.healthcare');
    }
}
