<?php

namespace App\Http\Controllers;

use App\Models\RouteName;
use Illuminate\Http\Request;

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

    public function ece($nivel)
    {
        $linkRegister = RouteName::where('route_name', $nivel)->first();

        if ($linkRegister) {
            session($linkRegister->toArray());
        }

        return view('pages.ece', ['nivel' => $nivel]);
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

    public function productos()
    {
        $routeName = request()->route()->getName();
        $linkRegister = RouteName::where('route_name', $routeName)->first();

        if ($linkRegister) {
            session($linkRegister->toArray());
        }

        $productRouteNames = ['laboratorio', 'ingresos', 'medical-view-system', 'odontologia', 'nutricion', 'ginecologia'];
        $productsCollection = RouteName::whereIn('route_name', $productRouteNames)->get();

        return view('pages.productos', ['producto' => $productsCollection]);
    }

    public function producto($producto)
    {
        $linkRegister = RouteName::where('route_name', $producto)->first();

        if ($linkRegister) {
            session($linkRegister->toArray());
        }

        return view('pages.producto.' . $producto);
    }

    public function contacto()
    {
        $routeName = request()->route()->getName();
        $linkRegister = RouteName::where('route_name', $routeName)->first();

        if ($linkRegister) {
            session($linkRegister->toArray());
        }

        return view('pages.contacto');
    }
}
