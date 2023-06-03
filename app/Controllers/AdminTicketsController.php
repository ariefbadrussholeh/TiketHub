<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Tickets;

class AdminTicketsController extends BaseController
{
    protected $ticketsModel;

    public function __construct()
    {
        $this->ticketsModel = new Tickets();
    }

    public function index()
    {
        $tickets = $this->ticketsModel->orderBy('booking_date', "DESC")->findAll();

        $data = [
            'data' => $tickets,
        ];

        // dd($tickets);

        return view('admin/tiket.php', $data);
    }

    public function update()
    {   
        $this->ticketsModel->save([
            'id'  => $this->request->getVar('id'),
            'payment_status'  => $this->request->getVar('payment_status'),
        ]);
        
        session()->setFlashdata('message', $this->request->getVar('message'));

        return redirect()->to('/admin/tiket');
    }
}
