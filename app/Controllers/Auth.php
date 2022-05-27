<?php

namespace App\Controllers;



class Auth extends BaseController
{
    public function index()
    {
        return redirect()->to(site_url('index'));
    }
    public function login()
    {
        return view('login');
    }
    public function register()
    {

        return view('register');
    }
    public function ak_login()
    {
        $Mlogin = new \App\Models\M_login();
        $login = $this->request->getPost('submit');
        if ($login) {
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');

            if (empty($err)) {
                $data = $Mlogin->where("username", $username)->first();
                if ($data['password'] != $password) {
                }
            }
            if (empty($err)) {
                $dataSesi = [
                    'id' => $data['id'],
                    'username' => $data['username'],
                    'password' => $data['password'],
                ];
                session()->set($dataSesi);
                return redirect()->to('home');
            }
            if ($err) {
                session()->setFlashdata('username', $username);
                session()->setFlashdata('error', $err);
                return redirect()->to("login");
            }
        }
        return view('index');
    }


    public function logout()
    {

        return redirect()->to('/auth/login');
    }
}
