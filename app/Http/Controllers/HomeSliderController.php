<?php

namespace App\Http\Controllers;

use App\Models\HomeSlider;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class HomeSliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $data = [
            'judul' => 'Home Sliders',
            'DataHS' => HomeSlider::latest()->get(),
        ];
        return view('pages.admin.home', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $data = [
            'judul' => 'New Home Sliders',
        ];
        return view('pages.admin.home_add', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(HomeSlider $homeSlider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(HomeSlider $homeSlider)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, HomeSlider $homeSlider)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HomeSlider $homeSlider)
    {
        //
    }
}
