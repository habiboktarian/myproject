<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Validation\StrictRules\CreditCardRules;
use CodeIgniter\Validation\StrictRules\FileRules;
use CodeIgniter\Validation\StrictRules\FormatRules;
use CodeIgniter\Validation\StrictRules\Rules;

class Validation extends BaseConfig
{
    // --------------------------------------------------------------------
    // Setup
    // --------------------------------------------------------------------

    /**
     * Stores the classes that contain the
     * rules that are available.
     *
     * @var list<string>
     */
    public array $ruleSets = [
        Rules::class,
        FormatRules::class,
        FileRules::class,
        CreditCardRules::class,
    ];

    /**
     * Specifies the views that are used to display the
     * errors.
     *
     * @var array<string, string>
     */
    public array $templates = [
        'list'   => 'CodeIgniter\Validation\Views\list',
        'single' => 'CodeIgniter\Validation\Views\single',
    ];

    // --------------------------------------------------------------------
    // Rules
    // --------------------------------------------------------------------

    // Aturan validasi untuk user
    public $user = [
        'email' => [
            'rules' => 'required|valid_email|is_unique[user_information.email,id,{id}]',
            'errors' => [
                'required' => 'Email harus diisi.',
                'valid_email' => 'Email tidak valid.',
                'is_unique' => 'Email sudah digunakan.'
            ]
        ],
        'username' => [
            'rules' => 'required|alpha_numeric|min_length[5]|is_unique[user.username,id,{id}]',
            'errors' => [
                'required' => 'Username harus diisi.',
                'alpha_numeric' => 'Username hanya boleh berisi huruf dan angka.',
                'min_length' => 'Username minimal harus terdiri dari 5 karakter.',
                'is_unique' => 'Username sudah digunakan.'
            ]
        ],
        'password' => [
            'rules' => 'required|min_length[8]',
            'errors' => [
                'required' => 'Password harus diisi.',
                'min_length' => 'Password minimal harus terdiri dari 8 karakter.'
            ]
        ],
        'nama' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Nama harus diisi.'
            ]
        ],
        'alamat' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Alamat harus diisi.'
            ]
        ],
        'nomor_telepon' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Nomor Telepon harus diisi.'
            ]
        ]
    ];

    public $role = [
        'role_name' => [
            'rules' => 'required|is_unique[role.role_name,id,{id}]',
            'errors' => [
                'is_unique' => 'Role Name sudah ada.',
                'required' => 'Role Name harus diisi.'
            ]
        ]
    ];
}
