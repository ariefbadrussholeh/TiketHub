<?php

namespace App\Models;

use CodeIgniter\Model;

class Schedules extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'schedules';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['transportation_id', 'route_id', 'date', 'time', 'price', 'duration_trip', 'passenger'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [
        'route_id' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Kolom rute harus diisi',
            ]
        ],
        'transportation_id' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Kolom transportasi harus diisi',
            ]
        ],
        'date' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Kolom tanggal harus diisi',
            ]
        ],
        'time' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Kolom waktu harus diisi',
            ]
        ],
        'price' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Kolom harga harus diisi',
            ]
        ],
        'duration_trip' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Kolom durasi perjalanan harus diisi',
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

    public function getScheduleById($id)
    {
        return $this->where(['id' => $id])->first();
    }

    public function findAllJoined(){
        $builder = $this->table('schedules')
            ->select('transportations.operator, transportations.category, transportations.type, routes.origin_destination, schedules.*')
            ->join('routes', 'routes.id = schedules.route_id')
            ->join('transportations', 'transportations.id = schedules.transportation_id')
            ->orderBy('schedules.updated_at', 'DESC')
            ->get();
            
        return $builder;
    }

    public function search($keyword){
        $builder = $this->table('schedules')
            ->select('transportations.operator, transportations.category, transportations.type, routes.origin_destination, schedules.*')
            ->join('routes', 'routes.id = schedules.route_id')
            ->join('transportations', 'transportations.id = schedules.transportation_id')
            ->like('operator', $keyword)
            ->orLike('origin_destination', $keyword)
            ->orLike('category', $keyword)
            ->orWhere('time', $keyword)
            ->orWhere('date', $keyword)
            ->orWhere('price', $keyword)
            ->orLike('duration_trip', $keyword)
            ->orderBy('updated_at', 'DESC')
            ->get();
        
        return $builder;
    }
}