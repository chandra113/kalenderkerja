<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UsersModel;

class User extends BaseController
{

    public function dashboard()
    {
        $data = [
            'title' => 'AKalKer | Dashboard'
        ];
        return view('admin/dashboard', $data);
    }


    public function rencana()
    {
        $data = [
            'title' => 'AKalKer | Change Profile'
        ];
        return view('user/rencana', $data);
    }


    public function saveKegiatan()
    {
        $this->kegiatanModel->saveKegiatan([
            'nama_kegiatan' => $this->request->getVar('nama_kegiatan'),
            'anggaran' => $this->request->getVar('anggaran'),
            'tanggal_kegiatan' => $this->request->getVar('tanggal_kegiatan'),
        ]);

        return redirect()->to('/dashboard');
    }


    // public function register()
    // {
    //     $data = [
    //         'title' => 'AKalKer | Change Profile'
    //     ];
    //     if (this->request->getMethod() == 'post') {
    //         $rules = [
    //             'role' => [
    //                 'rules' => 'required',
    //                 'errors' => [
    //                     'required' => 'Silakan pilih Jenis Pengguna'
    //                 ]
    //             ],
    //             'gender' => [
    //                 'rules' => 'required',
    //                 'errors' => [
    //                     'required' => 'Silakan pilih Jenis Kelamin'
    //                 ]
    //             ],
    //             'fullname' => [
    //                 'rules' => 'required|min_length[3]|max_length[40]',
    //                 'errors' => [
    //                     'required' => 'Nama harus diisi',
    //                     'min_length' => 'Nama harus terisi minimal 3 karakter'
    //                 ]
    //             ],
    //             'email' => [
    //                 'rules' => 'required|valid_email|min_length[6]|max_length[50]|is_unique[users.email]',
    //                 'errors' => [
    //                     'required' => 'Email harus diisi',
    //                     'is_unique' => 'Email sudah terdaftar',
    //                     'min_length' => 'Email harus terisi minimal 6 karakter'
    //                 ]
    //             ],
    //             'username' => [
    //                 'rules' => 'required|min_length[16]|max_length[30]|is_unique[users.username]',
    //                 'errors' => [
    //                     'required' => 'Username harus diisi',
    //                     'is_unique' => 'Username sudah terdaftar',
    //                     'min_length' => 'Username harus terisi minimal 16 karakter'
    //                 ]
    //             ],
    //             'password' => [
    //                 'rules' => 'required|min_length[8]|max_length[100]',
    //                 'errors' => [
    //                     'required' => 'Password harus diisi',
    //                     'min_length' => 'Password harus terisi minimal 8 karakter'
    //                 ]
    //             ],
    //             'repeatPassword' => [
    //                 'rules' => 'required|matches[password]',
    //                 'errors' => [
    //                     'required' => 'Ulangi Password harus diisi',
    //                     'matches' => 'Isi pada Password dan Ulangi Password harus sama'
    //                 ]
    //             ]
    //         ];

    //         if (! $this->validate($rules)) {
    //             $data['validation'] = $this->validator;
    //         }
    //         else {
    //             #store the user to database
    //         }
    //     }
    //     return view('user/rencana', $data);
    // }


    // public function changePassword()
    // {
    //     $data = [
    //         'title' => 'AKalKer | Change Password'
    //     ];
    // 	return view('admin/change_password', $data);
    // }

}
