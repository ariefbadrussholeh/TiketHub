<?php

namespace App\Models;

use CodeIgniter\Model;

class Tickets extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'tickets';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['user_id', 'schedule_id', 'payment_status', 'full_name', 'phone_number', 'card_identity', 'birth_date'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'booking_date';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [
        'full_name' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Kolom nama lengkap harus diisi',
            ]
        ],
        'phone_number' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Kolom nomor telepon harus diisi',
            ]
        ],
        'card_identity' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'NIK harus diisi',
            ]
        ],
        'birth_date' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Tanggal lahir harus diisi',
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

    public function getTicketById($user_id)
    {
        $builder = $this->table('tickets')
            ->select('transportations.*,  routes.*, schedules.*, tickets.*')
            ->join('schedules', 'schedules.id = tickets.schedule_id')
            ->join('routes', 'routes.id = schedules.route_id')
            ->join('transportations', 'transportations.id = schedules.transportation_id')
            ->where('user_id', $user_id)
            ->orderBy('booking_date', "DESC")
            ->get();
            
        return $builder;
    }

    public function getSingleTicketById($id)
    {
        $builder = $this->table('tickets')
            ->select('transportations.*,  routes.*, schedules.*, tickets.*')
            ->join('schedules', 'schedules.id = tickets.schedule_id')
            ->join('routes', 'routes.id = schedules.route_id')
            ->join('transportations', 'transportations.id = schedules.transportation_id')
            ->where('tickets.id', $id)
            ->get();
            
        return $builder;
    }
}