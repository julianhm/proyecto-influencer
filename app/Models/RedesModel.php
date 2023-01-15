<?php

namespace App\Models;

use CodeIgniter\Model;

class RedesModel extends Model
{
    
    protected $table      = 'redes_sociales';
    protected $primaryKey = 'idredes';

    //protected $useAutoIncrement = true;

    //protected $returnType     = 'array';
    //protected $useSoftDeletes = true;

    protected $allowedFields = ['nombre'];

    //protected $useTimestamps = false;
    //protected $createdField  = 'created_at';
    //protected $updatedField  = 'updated_at';
    //protected $deletedField  = 'deleted_at';

    //protected $validationRules    = [];
    //protected $validationMessages = [];
    //protected $skipValidation     = false;

    
   
}