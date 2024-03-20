<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Sekolah extends BaseController
{
    public function index()
    {
        return view('homesekolah'); // Memuat view 'home.php'
    }
    public function about()
    {
        return view('about'); // Memuat view 'about.php'
    }

    public function biodata()
    {
        helper('biodata'); // Memuat view 'about.php'
    }
}