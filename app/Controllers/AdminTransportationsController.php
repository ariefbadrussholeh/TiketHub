<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Transportations;

class AdminTransportationsController extends BaseController
{
    protected $transportationsModel;

    public function __construct()
    {
        $this->transportationsModel = new Transportations();
    }

    public function index()
    {
        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $transportations = $this->transportationsModel->search($keyword)->getResult('array');
        } else {
            $transportations = $this->transportationsModel->orderBy('updated_at', 'DESC')->findAll();
        }

        $data = [
            'data' => $transportations,
        ];

        return view('admin/transportasi/transportasi.php', $data);
    }

    public function tambah()
    {
        return view('admin/transportasi/tambah.php');
    }

    public function save()
    {   
        if(!$this->validate($this->transportationsModel->getValidationRules()))
        {
            $validation = $this->validator->getErrors();
            
            return redirect()->to('/admin/transportasi/tambah')->withInput()->with('validation', $validation);
        }

        $this->transportationsModel->save([
            'category'  => $this->request->getVar('category'),
            'operator'  => $this->request->getVar('operator'),
            'type'      => $this->request->getVar('type'),
            'capacity'  => $this->request->getVar('capacity'),
        ]);
        
        session()->setFlashdata('message', $this->request->getVar('message'));

        return redirect()->to('/admin/transportasi');
    }

    public function delete($id)
    {
        $this->transportationsModel->delete($id);

        session()->setFlashdata('message', 'Data berhasil dihapus');

        return redirect()->to('/admin/transportasi');
    }

    public function edit($id)
    {
        $data = $this->transportationsModel->getTransportationById($id);

        return view('/admin/transportasi/edit.php', ['data' => $data]);
    }

    public function save_edit()
    {   
        if(!$this->validate($this->transportationsModel->getValidationRules()))
        {
            $validation = $this->validator->getErrors();

            return redirect()->to('/admin/transportasi/edit/'.$this->request->getVar('id'))->withInput()->with('validation', $validation);
        }

        $this->transportationsModel->save([
            'id'        => $this->request->getVar('id'),
            'category'  => $this->request->getVar('category'),
            'operator'  => $this->request->getVar('operator'),
            'type'      => $this->request->getVar('type'),
            'capacity'  => $this->request->getVar('capacity'),
        ]);
        
        session()->setFlashdata('message', $this->request->getVar('message'));

        return redirect()->to('/admin/transportasi');
    }
}
