<?php

namespace App\Controllers;

use App\Models\UserModel;

class AuthController extends BaseController
{
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->session = session();
    }

    public function index()
    {
        return view('loginView');
    }

    public function login()
    {
        // Validasi input
        if ($this->validate([
            'identifikasi' => 'required',
            'password' => 'required',
            csrf_token() => 'required'
        ])) {
            $identifikasi = $this->request->getPost('identifikasi');
            $password = $this->request->getPost('password');

            // Cek apakah input valid
            if ($identifikasi !== null && !is_array($identifikasi) && $password !== null && !is_array($password)) {
                $user = $this->userModel->getUserByUsernameOrEmail($identifikasi);

                // Verifikasi password
                if ($user && password_verify($password, $user['password'])) {
                    $sessionData = [
                        'id' => $user['id'],
                        'nama' => $user['nama'],
                        'foto' => $user['foto'],
                        'role_id' => $user['role_id'],
                        'email' => $user['email'],
                        'username' => $user['username'],
                        'logged_in' => true
                    ];
                    $this->session->set($sessionData);
                    $this->session->setFlashdata('success', 'Login berhasil');
                    return redirect()->to('dashboard');
                } else {
                    $this->session->setFlashdata('error', 'Username/Email atau Password salah!');
                }
            } else {
                $this->session->setFlashdata('error', 'Input tidak valid!');
            }
        } else {
            // $this->session->setFlashdata('error', 'Input tidak valid atau CSRF token tidak valid');
            $this->session->setFlashdata('error', 'Masukan data dengan benar!');
        }

        return redirect()->to('login');
    }

    public function logout()
    {
        $this->session->destroy();
        $this->session->setFlashdata('success', 'Logout berhasil');
        return redirect()->to('login');
    }
}
