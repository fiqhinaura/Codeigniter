<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Calculator extends BaseController
{
    public function divide()
    {
        try {
            $result = 3 / 1;
            echo "Hasil pembagian: " . $result;
        } catch (\Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}
