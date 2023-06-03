<?php

namespace App\Controllers;

use App\Models\Routes;
use App\Models\Schedules;
use App\Models\Tickets;
use App\Models\Transportations;

class Home extends BaseController
{
    protected $schedulesModel;
    protected $transportationsModel;
    protected $routesModel;
    protected $ticketsModel;

    public function __construct()
    {
        $this->schedulesModel = new Schedules();
        $this->transportationsModel = new Transportations();
        $this->routesModel = new Routes();
        $this->ticketsModel = new Tickets();
    }

    public function index()
    {
        return view('landing_page.php');
    }

    public function admin_dashboard()
    {
        $data = [
            'num_schedules'  => $this->schedulesModel->countAllResults(),
            'num_transportations'  => $this->transportationsModel->countAllResults(),
            'num_routes'  => $this->routesModel->countAllResults(),
            'num_tickets'  => $this->ticketsModel->countAllResults(),
        ];

        return view('admin/dashboard.php', $data);
    }

    public function cari_tiket()
    { 
        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $schedules = $this->schedulesModel->search($keyword)->getResult('array');
        } else {
            $schedules = $this->schedulesModel->findAllJoined()->getResult('array');
        }

        $data = [
            'data' => $schedules,
        ];

        // dd($data);

        return view('cari_tiket.php', $data);
    }

    public function pesan_tiket($id_user,$id_schedules)
    {
        // id = $this->request->getVar('id');
        $data = $this->schedulesModel->getScheduleById($id_schedules);
        

        return view('pesan_tiket.php', ['data' => $data,
                                        'id_user' => $id_user]);
    }

    public function save($id_user,$id_schedules)
    {   
        if(!$this->validate($this->ticketsModel->getValidationRules()))
        {
            $validation = $this->validator->getErrors();
            
            return redirect()->to('/pesan-tiket')->withInput()->with('validation', $validation);
        }

        $this->ticketsModel->save([
            'user_id'  => $id_user,
            'schedule_id'  => $id_schedules,
            'full_name'      => $this->request->getVar('type'),
            'phone_number'  => $this->request->getVar('capacity'),
            'card_identity'  => $this->request->getVar('capacity'),
            'birth_date'  => $this->request->getVar('capacity'),
        ]);
        
        session()->setFlashdata('message', $this->request->getVar('message'));

        return redirect()->to('/index.php');
    }
}

// 'user_id', 'schedule_id', 'payment_status', 'full_name', 'phone_number', 'card_identity', 'birth_date'