<?php

namespace App\Models;

use CodeIgniter\Model;

class MarcaModel extends Model
{
    
    protected $table      = 'marcas';
    protected $primaryKey = 'idmarca';

    //protected $useAutoIncrement = true;

    //protected $returnType     = 'array';
    //protected $useSoftDeletes = true;

    protected $allowedFields = ['nombre','tipo','idinfluencer'];

    //protected $useTimestamps = false;
    //protected $createdField  = 'created_at';
    //protected $updatedField  = 'updated_at';
    //protected $deletedField  = 'deleted_at';

    //protected $validationRules    = [];
    //protected $validationMessages = [];
    //protected $skipValidation     = false;

    
    }