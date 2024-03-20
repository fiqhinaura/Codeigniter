<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Obat extends BaseController
{
    function __construct()
    {
        $this->model = new \App\Models\Obat();
    }

    public function simpan()
    {
        $hasil['sukses'] = false;
        $hasil['error'] = "Ada Error terjadi";
        return json_encode($hasil);
    }
    public function index()
    {
        return view('tampilobat');
    }
}
