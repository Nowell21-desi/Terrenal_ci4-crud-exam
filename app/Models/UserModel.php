<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'email', 'password', 'created_at'];
    protected $useTimestamps = false;
    protected $createdField = 'created_at';
    
    protected $validationRules = [
        'name' => 'required|min_length[3]|max_length[100]',
        'email' => 'required|valid_email|is_unique[users.email]',
        'password' => 'required|min_length[6]'
    ];
    
    protected $validationMessages = [
        'email' => [
            'is_unique' => 'This email is already registered.'
        ]
    ];
    
    public function getUserByEmail($email)
    {
        return $this->where('email', $email)->first();
    }
}
