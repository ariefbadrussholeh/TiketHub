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
}
