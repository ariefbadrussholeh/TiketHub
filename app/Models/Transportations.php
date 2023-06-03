<?php

namespace App\Models;

use CodeIgniter\Model;

class Transportations extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'transportations';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['category', 'operator', 'type', 'capacity'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    public $validationRules = [
        'category' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Kolom kategori harus diisi',
            ]
        ],
        'operator' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Kolom operator harus diisi',
            ]
        ],
        'type' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Kolom tipe harus diisi',
            ]
        ],
        'capacity' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Kolom kapasitas harus diisi',
            ]
        ],
    ];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    public function getTransportationById($id)
    {
        return $this->where(['id' => $id])->first();
    }

    public function search($keyword){
        $builder = $this->table('transportations')
            ->like('category', $keyword)
            ->orLike('operator', $keyword)
            ->orLike('type', $keyword)
            ->orWhere('capacity', $keyword)
            ->orderBY('updated_at', 'DESC')
            ->get();

        return $builder;
    }
}
