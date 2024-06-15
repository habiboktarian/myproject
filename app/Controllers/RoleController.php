<?php

namespace App\Controllers;

use App\Models\RoleModel;

class RoleController extends BaseController
{
    protected $roleModel;

    public function __construct()
    {
        $this->roleModel = new RoleModel();
        $this->session = session();
    }

    public function index(): string
    {
        $roles = $this->roleModel->findAll();

        $data = [
            'title' => 'Setting | Role',
            'view_role' => $roles
        ];
        return view('Admin/roleView', $data);
    }

    public function add()
    {
        $validation = \Config\Services::validation();
        $validation->setRules(config('Validation')->role);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        $data = [
            'role_name' => $this->request->getPost('role_name')
        ];
        $this->roleModel->save($data);

        return redirect()->to('role')->with('success', 'Role Name berhasil ditambahkan.');
    }

    public function update($id)
    {
        // $validation = \Config\Services::validation();
        // $validation->setRules(config('Validation')->role);

        // if (!$validation->withRequest($this->request)->run()) {
        //     return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        // }

        $data = [
            'role_name' => $this->request->getPost('role_name')
        ];
        $this->roleModel->update($id, $data);

        return redirect()->to('role')->with('success', 'Role Name berhasil diupdate.');
    }

    public function delete($id)
    {
        $this->roleModel->delete($id);
        return redirect()->to('role')->with('success', 'Role Name berhasil dihapus.');
    }
}
