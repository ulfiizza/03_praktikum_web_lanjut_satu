<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        return view ('product', [
            'judul' => 'Produk']);
    }

    public function satu()
    {
        return view ('product', [
            'judul' => 'Marbel Edu Games']);
    }

    public function dua()
    {
        return view ('product', [
            'judul' => 'Marbel and Friends Kids Games']);
    }

    public function tiga()
    {
        return view ('product', [
            'judul' => 'Riri Story Books']);
    }

    public function empat()
    {
        return view ('product', [
            'judul' => 'Kolak Kids Songs']);
    }

    // /**
    //  * Show the form for creating a new resource.
    //  */
    // public function create()
    // {
    //     //
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  */
    // public function store(Request $request)
    // {
    //     //
    // }

    // /**
    //  * Display the specified resource.
    //  */
    // public function show(string $id)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  */
    // public function edit(string $id)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  */
    // public function update(Request $request, string $id)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  */
    // public function destroy(string $id)
    // {
    //     //
    // }
}
