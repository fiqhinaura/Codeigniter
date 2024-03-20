<?php

namespace App\Controllers;

use App\Models\Obat;

class Home extends BaseController
{
    public function index(): string
    {
        $obat_model = new Obat();
        $all_data_obat = $obat_model->findAll();
        // return view('obat', ['all_data_obat' => $all_data_obat]);
        $model = new \App\Models\Obat();

        $data = [
            'all_data_obat' => $model->paginate(4), // Menggunakan paginate untuk memperoleh data yang telah dipaginasi
            'pager' => $model->pager,
        ];
    
        return view('obat', $data);

    }

    public function add_data_obat()
    {
        return view('add_data_obat');
    }

    public function proses_add_obat()
    {
        $obat_model = new Obat();
        $obat_model->insert($this->request->getPost());
        return redirect()->to(base_url('obat'));
    }

    public function edit_data_obat($id = false){
        $obat_model = new Obat();
        $data_obat = $obat_model->find($id);
        return view('edit_data_obat',['data_obat'=>$data_obat]);
    }

    public function proses_edit_obat(){
        $obat_model = new Obat();
        $obat_model->update($this->request->getPost('id'), $this->request->getPost());
        return redirect()->to(base_url('obat'));
    }

    public function hapus_data_obat($id = false){
        $obat_model = new Obat();
        $obat_model->delete($id);
        return redirect()->to(base_url('obat'));
    }
}
