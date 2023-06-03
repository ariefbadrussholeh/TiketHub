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
    // protected $validationRules      = [];
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

    public $validationRules = [
        'user_id' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Anda belum login',
            ]
        ],
        'schedule_id' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Pilih jadwal',
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

}