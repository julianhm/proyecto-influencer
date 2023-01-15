<?php

namespace App\Models;

use CodeIgniter\Model;

class InfluencerModel extends Model
{
    
    protected $table      = 'influencers';
    protected $primaryKey = 'idinfluencer';

    //protected $useAutoIncrement = true;

    //protected $returnType     = 'array';
    //protected $useSoftDeletes = true;

    protected $allowedFields = ['nombreinflu', 'alias','password', 'correo', 'foto_perfil','resenia','usuario','video','reputacion','oferta','idciudad','created_at'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    //protected $validationRules    = [];
    //protected $validationMessages = [];
    //protected $skipValidation     = false;

    
    public function get($id = null)
    {
        if ($id === null) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }
}