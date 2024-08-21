<?php

namespace App\Http\Controllers;

use App\Models\RouteName;

class PageController extends Controller
{
    public function lyrium()
    {
        $routeName = request()->route()->getName();
        $linkRegister = RouteName::where('route_name', $routeName)->first();

        if ($linkRegister) {
            session($linkRegister->toArray());
        }

        return view('pages.lyrium');
    }

    public function healthcare($nivel)
    {
        $linkRegister = RouteName::where('route_name', $nivel)->first();

        if ($linkRegister) {
            session($linkRegister->toArray());
        }

        return view('pages.healthcare', ['nivel' => $nivel]);
    }

    public function mvs()
    {
        $routeName = request()->route()->getName();
        $linkRegister = RouteName::where('route_name', $routeName)->first();

        if ($linkRegister) {
            session($linkRegister->toArray());
        }

        return view('pages.mvs');
    }
}
