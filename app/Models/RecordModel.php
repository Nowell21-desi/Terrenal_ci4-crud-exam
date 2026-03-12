<?php

namespace App\Models;

use CodeIgniter\Model;

class RecordModel extends Model
{
    protected $table = 'records';
    protected $primaryKey = 'id';
    protected $allowedFields = ['title', 'description', 'category', 'status', 'created_at', 'updated_at'];
    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    
    protected $validationRules = [
        'title' => 'required|min_length[3]|max_length[200]',
        'description' => 'required|min_length[10]',
        'category' => 'required|min_length[3]|max_length[100]',
        'status' => 'required|in_list[active,inactive,pending]'
    ];
    
    protected $validationMessages = [
        'title' => [
            'required' => 'Title is required',
            'min_length' => 'Title must be at least 3 characters'
        ],
        'description' => [
            'required' => 'Description is required',
            'min_length' => 'Description must be at least 10 characters'
        ]
    ];
    
    public function getRecordsPaginated($perPage = 10)
    {
        return $this->orderBy('created_at', 'DESC')->paginate($perPage);
    }
}
