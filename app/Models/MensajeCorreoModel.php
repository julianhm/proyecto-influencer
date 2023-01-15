<?php

namespace App\Models;

use CodeIgniter\Model;

class MensajeCorreoModel extends Model
{
    
    protected $table      = 'mensaje_correo';
    protected $primaryKey = 'id';

    //protected $useAutoIncrement = true;

    //protected $returnType     = 'array';
    //protected $useSoftDeletes = true;

    protected $allowedFields = ['idinfluencer','nombre','empresa','correoremitente','celularremitente','cuerpo','created_at'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    //protected $validationRules    = [];
    //protected $validationMessages = [];
    //protected $skipValidation     = false;

    
   
}