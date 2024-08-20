<?php

namespace App\Http\Controllers;

use App\Models\RouteName;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

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

        return view('pages.healthcare');
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
