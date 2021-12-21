<?php

namespace App\Controllers;

use App\Models\LoginModel;

class ProfileUser extends BaseController
{

    protected $LoginModel;
    public function __construct()
    {
        $this->LoginModel = new \App\Models\LoginModel();
    }

    public function index()
    {
        $data = [
            'data_user' => $this->LoginModel->getDataUser(session()->get('username'))
        ];

        return view('pages/profile', $data);
    }

    public function edit_profile()
    {
        $data = [
            'data_user' => $this->LoginModel->getDataUser(session()->get('username')),
            'validation' => \Config\Services::validation()
        ];
        return view('pages/edit_profile', $data);
    }

    public function update()
    {
        $session = session();
        $data = $this->LoginModel->getDataUser($session->get('username'));

        if (!$this->validate([
            'foto' => [
                'rules' => 'is_image[foto]|mime_in[foto,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'is_image' => 'file harus gambar',
                    'mime_in' => 'file harus gambar'
                ]
            ]
        ])) {
            return redirect()->to('/ProfileUser/edit_profile')->withInput();
        }

        $foto = $this->request->getFile('foto');
        if (file_exists($foto)) {
            $nama_foto = $foto->getRandomName();
            $foto->move('img', $nama_foto);
        } else {
            $nama_foto = $data['dirAvatar'];
        }


        $this->LoginModel->update(
            $data['id'],
            [
                'major' => $this->request->getVar('major'),
                'description' => $this->request->getVar('desc'),
                'nama' => $this->request->getVar('name'),
                'age' => $this->request->getVar('age'),
                'address' => $this->request->getVar('address'),
                'phone' => $this->request->getVar('phone'),
                'instagram' => $this->request->getVar('ig'),
                'facebook' => $this->request->getVar('fb'),
                'dirAvatar' => $nama_foto
            ]
        );

        session()->setFlashdata('pesan', 'Profile Berhasil diedit.');
        return redirect()->to('/ProfileUser/index');
    }

    public function logout()
    {
        session()->destroy();
        return view('pages/login');
    }
}
