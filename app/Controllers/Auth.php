<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UsersModel;
use App\Models\AuthModel;

class Auth extends BaseController
{
    public function login()
    {
        $data = [
            'title' => 'AKalKer | Login'
            //'validation' => \Config\services::validation(),
        ];
        //helper(['form']);
        return view('auth/login', $data);
    }

    public function loginCheck()
    {

        //validation here
        //$validator = \Config\Services::validation();

        $users = new UsersModel();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $dataUser = $users->where([
            'username' => $username,
        ])->first();

        if ($dataUser) {
            if (password_verify($password, $dataUser->password)) {
                session()->set([
                    'username' => $dataUser->username,
                    'fullname' => $dataUser->fullname,
                    'logged_in' => TRUE
                ]);
                return redirect()->to('/dashboard');
            } else {
                session()->setFlashdata('errLog', 'Username & Password Salah');
                return redirect()->back();
            }
        } else {
            session()->setFlashdata('errLog', 'Username & Password Salah');
            return redirect()->back();
        }

        // session()->setFlashdata('errLog', 'Username Anda salah');
        // return redirect()->to('/login')->withInput()->with('validation', $validator);
    }


    // private function setUserSession($user)
    // {
    //     $data = [
    //         'id' => $user['id'],
    //         'fullname' => $user['fullname'],
    //         'gender' => $user['gender'],
    //         'username' => $user['username'],
    //         'email' => $user['email'],
    //         'isLoggedIn' => true,
    //     ];
    //     session()->set($data);
    //     return true;
    // }

    // public function loginCheck()
    // {
    //     $model = new AuthModel;
    //     $table = 'users';

    //     $username = $this->request->getVar('username');
    //     $password = $this->request->getVar('password');
    //     $row = $model->get_data_login($username, $table);

    //     //validation here
    //     if (!$this->validate([
    //         'username' => [
    //             'rules' => 'matches',
    //             'errors' => 'Username Anda salah/belum terdaftar',
    //         ],
    //         'password' => [
    //             'rules' => 'matches',
    //             'errors' => 'Password Anda salah',
    //         ],
    //     ])) {
    //         //show error on login page
    //         $validator = \Config\Services::validation();
    //         return redirect()->to('/login')->withInput()->with('validation', $validator);
    //     } else {
    //         session()->setFlashdata('msg', 'Anda Berhasil Login');

    //         return redirect()->to('/dashboard');
    //     }
    // }

    public function register()
    {

        $data = [
            'title' => 'AKalKer | Registration',
            'validation' => \Config\services::validation(),

        ];
        //helper(['form']);
        return view('auth/register', $data);
    }

    public function saveRegister()
    {
        //validation here
        if (!$this->validate([
            // 'role' => [
            //     'rules' => 'required',
            //     'errors' => [
            //         'required' => 'Silakan pilih Jenis Pengguna'
            //     ]
            // ],
            'gender' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Silakan pilih Jenis Kelamin'
                ]
            ],
            'fullname' => [
                'rules' => 'required|min_length[3]|max_length[40]',
                'errors' => [
                    'required' => 'Nama harus diisi',
                    'min_length' => 'Nama harus terisi minimal 3 karakter'
                ]
            ],
            'email' => [
                'rules' => 'required|valid_email|min_length[6]|max_length[50]|is_unique[users.email]',
                'errors' => [
                    'required' => 'Email harus diisi',
                    'is_unique' => 'Email sudah terdaftar',
                    'min_length' => 'Email harus terisi minimal 6 karakter'
                ]
            ],
            'username' => [
                'rules' => 'required|min_length[16]|max_length[30]|is_unique[users.username]',
                'errors' => [
                    'required' => 'Username harus diisi',
                    'is_unique' => 'Username sudah terdaftar',
                    'min_length' => 'Username harus terisi minimal 16 karakter'
                ]
            ],
            'password' => [
                'rules' => 'required|min_length[8]|max_length[100]',
                'errors' => [
                    'required' => 'Password harus diisi',
                    'min_length' => 'Password harus terisi minimal 8 karakter'
                ]
            ],
            'repeatPassword' => [
                'rules' => 'required|matches[password]',
                'errors' => [
                    'required' => 'Ulangi Password harus diisi',
                    'matches' => 'Isi pada Password dan Ulangi Password harus sama'
                ]
            ],
        ])) {
            //show error on register page
            //session()->setFlashdata('error', $this->validator->listErrors());
            //$data['validation'] = $this->validator;
            $validator = \Config\Services::validation();
            return redirect()->to('/register')->withInput()->with('validation', $validator);
        } else {
            //store to database here
            $users = new UsersModel;
            $users->insert([
                // 'role' => $this->request->getVar('role'),
                'fullname' => $this->request->getVar('fullname'),
                'gender' => $this->request->getVar('gender'),
                'email' => $this->request->getVar('email'),
                'username' => $this->request->getVar('username'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                //TODO get the better password hash https://youtu.be/SbiszsRnETo
            ]);
            session()->setFlashdata('msg', 'Akun berhasil terdaftar');

            return redirect()->to('/login');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }

    public function forgotPassword()
    {
        $data = [
            'title' => 'AKalKer | Lupa Password'
        ];
        return view('auth/forgot_password', $data);
    }

    public function resetPassword()
    {
        $data = [
            'title' => 'AKalKer | Ubah Password'
        ];
        return view('auth/reset_password', $data);
    }
}
