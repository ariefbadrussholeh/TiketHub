<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Routes;
use App\Models\Schedules;
use App\Models\Transportations;

class AdminSchedulesController extends BaseController
{
    protected $schedulesModel;
    protected $transportationsModel;
    protected $routesModel;

    public function __construct()
    {
        $this->schedulesModel = new Schedules();
        $this->transportationsModel = new Transportations();
        $this->routesModel = new Routes();
    }

    public function index()
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

        // dd($schedules);

        return view('admin/jadwal/jadwal.php', $data);
    }

    public function tambah()
    {
        $data = [
            'transportations' => $this->transportationsModel->findAll(),
            'routes'          => $this->routesModel->findAll(),
        ];

        return view('admin/jadwal/tambah.php', $data);
    }

    public function save()
    {   
        if(!$this->validate($this->schedulesModel->getValidationRules()))
        {
            $validation = $this->validator->getErrors();
            
            return redirect()->to('/admin/jadwal/tambah')->withInput()->with('validation', $validation);
        }

        $this->schedulesModel->save([
            'route_id'  => $this->request->getVar('route_id'),
            'transportation_id'  => $this->request->getVar('transportation_id'),
            'time'      => $this->request->getVar('time'),
            'date'  => $this->request->getVar('date'),
            'price'  => $this->request->getVar('price'),
            'duration_trip'  => $this->request->getVar('duration_trip'),
        ]);
        
        session()->setFlashdata('message', $this->request->getVar('message'));

        return redirect()->to('/admin/jadwal');
    }

    public function delete($id)
    {
        $this->schedulesModel->delete($id);

        session()->setFlashdata('message', 'Data berhasil dihapus');

        return redirect()->to('/admin/jadwal');
    }

    public function edit($id)
    {
        $data = [
            'transportations' => $this->transportationsModel->findAll(),
            'routes'          => $this->routesModel->findAll(),
            'data'            => $this->schedulesModel->getScheduleById($id),
        ];

        // dd($data);

        return view('/admin/jadwal/edit.php', $data);
    }

    public function save_edit()
    {   
        if(!$this->validate($this->schedulesModel->getValidationRules()))
        {
            $validation = $this->validator->getErrors();

            return redirect()->to('/admin/jadwal/edit/'.$this->request->getVar('id'))->withInput()->with('validation', $validation);
        }

        $this->schedulesModel->save([
            'id'        => $this->request->getVar('id'),
            'route_id'  => $this->request->getVar('route_id'),
            'transportation_id'  => $this->request->getVar('transportation_id'),
            'time'      => $this->request->getVar('time'),
            'date'  => $this->request->getVar('date'),
            'price'  => $this->request->getVar('price'),
            'duration_trip'  => $this->request->getVar('duration_trip'),
        ]);
        
        session()->setFlashdata('message', $this->request->getVar('message'));

        return redirect()->to('/admin/jadwal');
    }
}
