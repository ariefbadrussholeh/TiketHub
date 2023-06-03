<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Routes;
use App\Models\Schedules;
use App\Models\Tickets;
use App\Models\Transportations;

class UserController extends BaseController
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

    public function pesan_tiket($id)
    {
        $data = [
            'data'  =>   $this->schedulesModel->findAllJoinedWhere($id)->getResult('array')[0],
        ];

        // dd($data['data']);

        return view('pesan_tiket.php', $data);
    }

    public function save()
    {  
        if(!$this->validate($this->ticketsModel->getValidationRules()))
        {
            $validation = $this->validator->getErrors();
            
            return redirect()->to("/pesan-tiket" . "/" . $this->request->getVar('schedule_id'))->withInput()->with('validation', $validation);
        }

        $this->ticketsModel->save([
            'user_id'  => user_id(),
            'schedule_id'  => $this->request->getVar('schedule_id'),
            'full_name'      => $this->request->getVar('full_name'),
            'phone_number'  => $this->request->getVar('phone_number'),
            'card_identity'  => $this->request->getVar('card_identity'),
            'birth_date'  => $this->request->getVar('birth_date'),
        ]);
        
        session()->setFlashdata('message', $this->request->getVar('message'));

        return redirect()->to('/cek-tiket');
    }

    public function cek_tiket()
    {
        $data = [
            'data'  => $this->ticketsModel->getTicketById(user_id())->getResult('array'),
        ];

        return view('cek_tiket.php', $data);
    }

    public function detail_tiket($id)
    {
        $data = [
            'data'  => $this->ticketsModel->getSingleTicketById($id)->getResult('array')[0],
        ];

        return view('detail_tiket.php', $data);
    }
}
