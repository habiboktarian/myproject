<?php

namespace App\Models;

use CodeIgniter\Model;

class ProjectModel extends Model
{
    protected $table = 'project';
    protected $useTimestamps = true;
    protected $allowedFields = ['user_id, name_project, image_project, created_at, updated_at'];
}
