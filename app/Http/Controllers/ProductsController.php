<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    public function mainPage()
    {
        $brands = DB::table('brand')->get();

        return view('welcome', [
            'heading' => 'Welcome Page',
            'newbrands' => $brands,
        ]);
    }

    public function storePage()
    {
        return view('store', [
            'heading' => 'Store Page',
            'products' => Products::orderBy("numstars", "desc")->get(),
        ]);
    }


    public function storePageS($argPage)
    {
        if ($argPage == 1) {

            return view('store', [
                'heading' => 'Store Page',
                'products' => Products::orderBy("price", "desc")->get(),
            ]);

        } else if ($argPage == 2) {

            return view('store', [
                'heading' => 'Store Page',
                'products' => Products::orderBy("price", "asc")->get(),
            ]);

        } else if ($argPage == 3) {
            
            return view('store', [
                'heading' => 'Store Page',
                'products' => Products::orderBy("brand", "asc")->get(),
            ]);

        } else if ($argPage == 4) {

            return view('store', [
                'heading' => 'Store Page',
                'products' => Products::orderBy("brand", "desc")->get(),
            ]);

        }
    }

    public function aboutPage()
    {
        return view('about', [
            'heading' => 'About Page',
        ]);
    }
}
