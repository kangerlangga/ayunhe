<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\HomeSlider;
use App\Models\Product;
use Illuminate\Http\Request;

class PublikController extends Controller
{
    //Fungsi untuk halaman home
    public function home()
    {
        return view('pages.public.home', [
            'judul' => 'Home',
            'cHS' => HomeSlider::where('visib_home_sliders', 'Showing')->count(),
            'HomeSlider' => HomeSlider::where('visib_home_sliders', 'Showing')->latest()->get(),
            'cP' => Product::where('stock_products', 'Available')->count(),
            'Product' => Product::where('stock_products', 'Available')->latest()->limit(4)->get(),
            'cB' => Blog::where('visib_blog', 'Showing')->count(),
            'Blog' => Blog::where('visib_blog', 'Showing')->latest()->limit(2)->get(),
        ]);
    }

    //Fungsi untuk halaman about
    public function about()
    {
        return view('pages.public.about', [
            'judul' => 'About Us',

        ]);
    }

    //Fungsi untuk halaman collection
    public function collection()
    {
        return view('pages.public.collection', [
            'judul' => 'Our Collections',
            'cP' => Product::where('stock_products', 'Available')->count(),
            'Product' => Product::where('stock_products', 'Available')->latest()->get(),
        ]);
    }

    //Fungsi untuk halaman blog
    public function blog()
    {
        return view('pages.public.blog', [
            'judul' => 'Blog',
            'cB' => Blog::where('visib_blog', 'Showing')->count(),
            'Blog' => Blog::where('visib_blog', 'Showing')->latest()->get(),
        ]);
    }
}
