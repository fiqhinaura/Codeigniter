<?php 

namespace  App\Models;
use CodeIgniter\Model;

class Obat extends Model
{
    protected $table      = 'obat';
    protected $primaryKey = 'id';
    protected $returnType = 'object';
    protected $allowedFields = ['id' , 'nama_obat' , 'jenis' , 'fungsi' , 'stock'];
}

?>