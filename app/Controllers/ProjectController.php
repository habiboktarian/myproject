<?php

namespace App\Controllers;

use App\Models\ProjectModel;

class ProjectController extends BaseController
{
    protected $projectModel;

    public function __construct()
    {
        $this->projectModel = new ProjectModel();
        $this->session = session();
    }

    public function index(): string
    {
        $projects = $this->projectModel->findAll();

        $data = [
            'title' => 'My Project',
            'view_project' => $projects
        ];
        return view('Admin/projectView', $data);
    }
}
