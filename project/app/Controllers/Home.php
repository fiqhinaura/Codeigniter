<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('navbar');
    }
    public function buku(): string
    {
        return view('buku');
    }
    public function penerbit(): string
    {
        return view('penerbit');
    }
}
