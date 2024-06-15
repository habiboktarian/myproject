<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\UserInformationModel;
use App\Models\RoleModel;

class UserController extends BaseController
{
    protected $userModel;
    protected $userInformationModel;
    protected $roleModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->userInformationModel = new UserInformationModel();
        $this->roleModel = new RoleModel();
        $this->session = session();
    }

    public function index(): string
    {
        $users = $this->userModel->getUserWithDetails();
        $roles = $this->roleModel->findAll();

        $data = [
            'title' => 'Setting | User',
            'view_user' => $users,
            'view_role' => $roles
        ];
        return view('Admin/userView', $data);
    }

    public function add()
    {
        $validation = \Config\Services::validation();
        $validation->setRules(config('Validation')->user);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        $password = $this->request->getPost('password');
        if ($password !== null && !is_array($password)) {
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            $this->userModel->save([
                'username' => $this->request->getPost('username'),
                'password' => $hashedPassword,
                'role_id' => $this->request->getPost('role_id'),
                'is_active' => $this->request->getPost('is_active')
            ]);

            $userId = $this->userModel->getInsertID();

            $foto = $this->request->getFile('foto');
            if ($foto && $foto->isValid() && !$foto->hasMoved()) {
                $newName = $foto->getRandomName();
                $foto->move(ROOTPATH . 'public/uploads/images/', $newName);
                $fotoPath =  $newName;

                $this->userInformationModel->save([
                    'user_id' => $userId,
                    'email' => $this->request->getPost('email'),
                    'nama' => $this->request->getPost('nama'),
                    'alamat' => $this->request->getPost('alamat'),
                    'nomor_telepon' => $this->request->getPost('nomor_telepon'),
                    'foto' => $fotoPath
                ]);

                $this->session->setFlashdata('success', 'User berhasil ditambahkan');
            } else {
                $this->session->setFlashdata('error', 'Upload foto tidak valid');
            }
        } else {
            $this->session->setFlashdata('error', 'Password tidak valid');
        }

        return redirect()->to('/user');
    }

    public function update($id)
    {
        $validation = \Config\Services::validation();
        $validation->setRules(config('Validation')->user);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        $password = $this->request->getPost('password');
        $userData = [
            'username' => $this->request->getPost('username'),
            'role_id' => $this->request->getPost('role_id'),
            'is_active' => $this->request->getPost('is_active')
        ];

        if ($password !== null && !is_array($password)) {
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            $userData['password'] = $hashedPassword;
        }

        $this->userModel->update($id, $userData);

        $userInfo = [
            'email' => $this->request->getPost('email'),
            'nama' => $this->request->getPost('nama'),
            'alamat' => $this->request->getPost('alamat'),
            'nomor_telepon' => $this->request->getPost('nomor_telepon')
        ];

        $foto = $this->request->getFile('foto');
        if ($foto->isValid() && !$foto->hasMoved()) {
            // Ambil informasi user untuk mendapatkan path foto lama
            $existingUserInfo = $this->userInformationModel->where('user_id', $id)->first();

            if ($existingUserInfo && !empty($existingUserInfo['foto'])) {
                // Hapus foto lama jika ada
                if (file_exists(ROOTPATH . 'public/uploads/images/' . $existingUserInfo['foto'])) {
                    unlink(ROOTPATH . 'public/uploads/images/' . $existingUserInfo['foto']);
                }
            }

            // Simpan foto baru
            $newName = $foto->getRandomName();
            $foto->move(ROOTPATH . 'public/uploads/images/', $newName);
            $fotoPath =   $newName;

            $userInfo['foto'] = $fotoPath;
        }

        $this->userInformationModel->where('user_id', $id)->set($userInfo)->update();

        $this->session->setFlashdata('success', 'User berhasil diperbarui');
        return redirect()->to('/user');
    }

    public function delete($id)
    {
        $user = $this->userModel->find($id);

        if ($user) {
            $userInfo = $this->userInformationModel->where('user_id', $id)->first();
            if ($userInfo) {
                // Hapus file foto dari direktori uploads jika ada
                if (!empty($userInfo['foto']) && file_exists(ROOTPATH . 'public/uploads/images/' . $userInfo['foto'])) {
                    unlink(ROOTPATH . 'public/uploads/images/' . $userInfo['foto']);
                }

                $this->userInformationModel->where('user_id', $id)->delete();
            }

            $this->userModel->delete($id);

            $this->session->setFlashdata('success', 'User berhasil dihapus');
        } else {
            $this->session->setFlashdata('error', 'User tidak ditemukan');
        }

        return redirect()->to('/user');
    }
}
