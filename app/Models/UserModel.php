<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'user';
    protected $allowedFields = ['username', 'password', 'role_id', 'is_active'];

    public function getUserWithDetails()
    {
        return $this->select('user.*, user_information.email, user_information.nama, user_information.alamat, user_information.nomor_telepon,user_information.foto, role.role_name')
            ->join('user_information', 'user.id = user_information.user_id')
            ->join('role', 'user.role_id = role.id')
            ->findAll();
    }

    public function getUserByUsernameOrEmail($identifikasi)
    {
        return $this->select('user.id, user.username, user.role_id, user_information.email,user_information.nama, user_information.foto, user.password')
            ->join('user_information', 'user.id = user_information.user_id')
            ->where('user.username', $identifikasi)
            ->orWhere('user_information.email', $identifikasi)
            ->first();
    }

    public function checkUnique($email, $username)
    {
        return $this->where('email', $email)->orWhere('username', $username)->first();
    }
}
