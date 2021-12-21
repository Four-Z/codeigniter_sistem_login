<?php

namespace App\Controllers;

class Account extends BaseController
{

    protected $LoginModel;
    public function __construct()
    {
        $this->LoginModel = new \App\Models\LoginModel();
    }
    public function index()
    {
        return view('pages/login');
    }

    public function register()
    {
        $data = [

            'validation' => \Config\Services::validation()
        ];

        return view('pages/register', $data);
    }

    public function create_account()
    {

        if (!$this->validate([
            'username' => [
                'rules' => 'is_unique[data_akun.user_name]',
                'errors' => [
                    'is_unique' => 'username sudah terdaftar'
                ]
            ],
            'email' => [
                'rules' => 'is_unique[data_akun.email]',
                'errors' => [
                    'is_unique' => 'email sudah terdaftar'
                ]
            ],
            'password' => [
                'rules' => 'matches[password2]',
                'errors' => [
                    'matches' => 'password is not match'
                ]
            ]


        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/Account/register')->withInput()->with('validation', $validation);
        }

        $password = $this->request->getVar('password');
        $encrypted_password = password_hash($password, PASSWORD_BCRYPT);
        $this->LoginModel->save([
            'user_name' => $this->request->getVar('username'),
            'nama' => $this->request->getVar('name'),
            'email' => $this->request->getVar('email'),
            'password' => $encrypted_password,
        ]);

        return redirect()->to('/Account/index');
    }

    public function login_auth()
    {
        $session = session();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');

        $data = $this->LoginModel->where('user_name', $username)->first();

        if ($data) {
            $pass = $data['password'];
            if (password_verify($password, $pass)) {
                $ses_data = [
                    'id' => $data['id'],
                    'username' => $data['user_name'],
                    'IsLoggedIn' => True
                ];

                $session->set($ses_data);
                return redirect()->to('/ProfileUser');
            } else {
                $session->setFlashdata('msg', 'Password is incorrect.');
                return redirect()->to('/Account/index');
            }
        } else {
            $session->setFlashdata('msg', 'Username does not exist.');
            return redirect()->to('/Account/index');
        }
    }
}
