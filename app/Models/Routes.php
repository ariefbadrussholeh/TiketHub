<?php

namespace App\Models;

use CodeIgniter\Model;

class Routes extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'routes';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['origin', 'destination', 'origin_destination', 'distance'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [
        'origin' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Kolom asal harus diisi',
            ]
        ],
        'destination' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Kolom tujuan harus diisi',
            ]
        ],
        'distance' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Kolom jarak harus diisi',
            ]
        ],
    ];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function getRouteById($id)
    {
        return $this->where(['id' => $id])->first();
    }

    public function search($keyword){
        $builder = $this->table('transportations')
            ->like('origin', $keyword)
            ->orLike('destination', $keyword)
            ->orWhere('distance', $keyword)
            ->orderBY('updated_at', 'DESC')
            ->get();

        return $builder;
    }
}
