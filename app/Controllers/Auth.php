<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class Auth extends Controller
{
    public function register()
    {
        helper(['form']);
        
        if ($this->request->getMethod() === 'post') {
            $rules = [
                'name' => 'required|min_length[3]|max_length[100]',
                'email' => 'required|valid_email|is_unique[users.email]',
                'password' => 'required|min_length[6]',
                'confirm_password' => 'required|matches[password]'
            ];
            
            if (!$this->validate($rules)) {
                return view('auth/register', [
                    'validation' => $this->validator
                ]);
            }
            
            $userModel = new UserModel();
            $data = [
                'name' => $this->request->getPost('name'),
                'email' => $this->request->getPost('email'),
                'password' => password_hash($this->request->getPost('password'), PASSWORD_BCRYPT)
            ];
            
            if ($userModel->insert($data)) {
                return redirect()->to('/login')->with('success', 'Registration successful! Please login.');
            } else {
                return redirect()->back()->with('error', 'Registration failed. Please try again.');
            }
        }
        
        return view('auth/register');
    }
    
    public function login()
    {
        helper(['form']);
        
        if ($this->request->getMethod() === 'post') {
            $rules = [
                'email' => 'required|valid_email',
                'password' => 'required'
            ];
            
            if (!$this->validate($rules)) {
                return view('auth/login', [
                    'validation' => $this->validator
                ]);
            }
            
            $userModel = new UserModel();
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');
            
            $user = $userModel->getUserByEmail($email);
            
            if ($user && password_verify($password, $user['password'])) {
                $session = session();
                $sessionData = [
                    'id' => $user['id'],
                    'name' => $user['name'],
                    'email' => $user['email'],
                    'isLoggedIn' => true
                ];
                $session->set($sessionData);
                
                return redirect()->to('/dashboard')->with('success', 'Welcome back, ' . $user['name'] . '!');
            } else {
                return redirect()->back()->with('error', 'Invalid email or password.');
            }
        }
        
        return view('auth/login');
    }
    
    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login')->with('success', 'You have been logged out successfully.');
    }
}
