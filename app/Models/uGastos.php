<?php

namespace App\Models;

use CodeIgniter\Model;

class uGastos extends Model
{
    protected $table      = 'gestion';
    protected $primaryKey = 'monto';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['monto','fecha','descripcion','categoria'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}

?>