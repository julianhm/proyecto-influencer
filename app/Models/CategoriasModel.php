<?php

namespace App\Models;

use CodeIgniter\Model;

class CategoriasModel extends Model
{
    
    protected $table      = 'categorias';
    protected $primaryKey = 'idcategoria';

    //protected $useAutoIncrement = true;

    //protected $returnType     = 'array';
    //protected $useSoftDeletes = true;

    protected $allowedFields = ['nombrecat','mostradas','imagen'];

    //protected $useTimestamps = false;
    //protected $createdField  = 'created_at';
    //protected $updatedField  = 'updated_at';
    //protected $deletedField  = 'deleted_at';

    //protected $validationRules    = [];
    //protected $validationMessages = [];
    //protected $skipValidation     = false;

    
   
}