<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Pager extends BaseConfig
{
    public $templates = [
        'default_full' => '\CodeIgniter\Pager\Views\default_full',
        'default_simple' => '\CodeIgniter\Pager\Views\default_simple',
        'default_head' => '\CodeIgniter\Pager\Views\default_head',
        'bootstrap_full' => 'MyApp\Pager\Views\bootstrap_full',
        'bootstrap_simple' => 'MyApp\Pager\Views\bootstrap_simple',
    ];

    public $perPage = 10; // Jumlah item yang ditampilkan per halaman
    public $segment = 3; // Segmen URI tempat nomor halaman terletak
}