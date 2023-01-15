<?php

namespace App\Models;

use CodeIgniter\Model;

class GaleriaModel extends Model
{
    
    protected $table      = 'galerias';
    protected $primaryKey = 'idfoto';

    //protected $useAutoIncrement = true;

    //protected $returnType     = 'array';
    //protected $useSoftDeletes = true;

    protected $allowedFields = ['url','idinfluencer'];

    //protected $useTimestamps = false;
    //protected $createdField  = 'created_at';
    //protected $updatedField  = 'updated_at';
    //protected $deletedField  = 'deleted_at';

    //protected $validationRules    = [];
    //protected $validationMessages = [];
    //protected $skipValidation     = false;

    
   
}