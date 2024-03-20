<?php


namespace App\Controllers;
use App\Models\Dosen as  DosenModel;

class Home extends BaseController
{
    public function index()//: string
    {
        // echo '<h1>Halaman Utama Web</h1>';
        return view('welcome_message');
    }
    //MODELING
    public function tampildosen()
    {
        $dosenModel = new DosenModel();
        $dosen = $dosenModel->findAll();
        dd($dosen);
    }

    public function biodata()
    {
        return view('biodata');
    }
    public function lihat()
    {
    return view('home')
            . view('tentangkami');
    }
}
