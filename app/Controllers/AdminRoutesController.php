<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Routes;

class AdminRoutesController extends BaseController
{
    protected $routesModel;

    public function __construct()
    {
        $this->routesModel = new Routes();
    }

    public function index()
    {
        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $routes = $this->routesModel->search($keyword)->getResult('array');
        } else {
            $routes = $this->routesModel->orderBy('updated_at', 'DESC')->findAll();
        }

        $data = [
            'data' => $routes,
        ];

        return view('admin/rute/rute.php', $data);
    }

    public function tambah()
    {
        return view('admin/rute/tambah.php');
    }

    public function save()
    {   
        if(!$this->validate($this->routesModel->getValidationRules()))
        {   
            $validation = $this->validator->getErrors();

            return redirect()->to('/admin/rute/tambah')->withInput()->with('validation', $validation);
        }

        $this->routesModel->save([
            'origin'  => $this->request->getVar('origin'),
            'destination'  => $this->request->getVar('destination'),
            'origin_destination'  => $this->request->getVar('origin') . " - " . $this->request->getVar('destination'),
            'distance'      => $this->request->getVar('distance'),
        ]);
        
        session()->setFlashdata('message', $this->request->getVar('message'));

        return redirect()->to('/admin/rute');
    }

    public function delete($id)
    {
        $this->routesModel->delete($id);

        session()->setFlashdata('message', 'Data berhasil dihapus');

        return redirect()->to('/admin/rute');
    }

    public function edit($id)
    {
        $data = $this->routesModel->getRouteById($id);

        return view('/admin/rute/edit.php', ['data' => $data]);
    }

    public function save_edit()
    {   
        if(!$this->validate($this->routesModel->getValidationRules()))
        {
            $validationErrors = $this->validator->getErrors();
            
            return redirect()->to('/admin/rute/edit/')->with('validationErrors', $validationErrors);
        }

        $this->routesModel->save([
            'id'            => $this->request->getVar('id'),
            'origin'        => $this->request->getVar('origin'),
            'destination'   => $this->request->getVar('destination'),
            'origin_destination'  => $this->request->getVar('origin') . " - " . $this->request->getVar('destination'),
            'distance'      => $this->request->getVar('distance'),
        ]);
        
        session()->setFlashdata('message', $this->request->getVar('message'));

        return redirect()->to('/admin/rute');
    }
}
