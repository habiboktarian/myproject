<?php

namespace App\Models;

use CodeIgniter\Model;

class UserInformationModel extends Model
{
    protected $table = 'user_information';
    protected $allowedFields = ['user_id', 'email', 'nama', 'alamat', 'nomor_telepon', 'foto'];
}
