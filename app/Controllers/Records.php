<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\RecordModel;

class Records extends BaseController
{
    protected $recordModel;
    
    public function __construct()
    {
        $this->recordModel = new RecordModel();
    }
    
    // Display all records (Read)
    public function index()
    {
        $data = [
            'title' => 'All Records',
            'records' => $this->recordModel->orderBy('created_at', 'DESC')->paginate(10),
            'pager' => $this->recordModel->pager
        ];
        
        return view('records/index', $data);
    }
    
    // Show single record detail
    public function show($id)
    {
        $record = $this->recordModel->find($id);
        
        if (!$record) {
            return redirect()->to('/records')->with('error', 'Record not found.');
        }
        
        $data = [
            'title' => 'Record Details',
            'record' => $record
        ];
        
        return view('records/show', $data);
    }
    
    // Show create form
    public function create()
    {
        helper(['form']);
        
        $data = [
            'title' => 'Create New Record',
            'validation' => null
        ];
        
        return view('records/create', $data);
    }
    
    // Store new record
    public function store()
    {
        helper(['form']);
        
        $rules = [
            'title' => 'required|min_length[3]|max_length[200]',
            'description' => 'required|min_length[10]',
            'category' => 'required|min_length[3]|max_length[100]',
            'status' => 'required|in_list[active,inactive,pending]'
        ];
        
        if (!$this->validate($rules)) {
            return view('records/create', [
                'title' => 'Create New Record',
                'validation' => $this->validator
            ]);
        }
        
        $data = [
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
            'category' => $this->request->getPost('category'),
            'status' => $this->request->getPost('status')
        ];
        
        if ($this->recordModel->insert($data)) {
            return redirect()->to('/records')->with('success', 'Record created successfully!');
        } else {
            return redirect()->back()->with('error', 'Failed to create record.');
        }
    }
    
    // Show edit form
    public function edit($id)
    {
        helper(['form']);
        
        $record = $this->recordModel->find($id);
        
        if (!$record) {
            return redirect()->to('/records')->with('error', 'Record not found.');
        }
        
        $data = [
            'title' => 'Edit Record',
            'record' => $record,
            'validation' => null
        ];
        
        return view('records/edit', $data);
    }
    
    // Update record
    public function update($id)
    {
        helper(['form']);
        
        $record = $this->recordModel->find($id);
        
        if (!$record) {
            return redirect()->to('/records')->with('error', 'Record not found.');
        }
        
        $rules = [
            'title' => 'required|min_length[3]|max_length[200]',
            'description' => 'required|min_length[10]',
            'category' => 'required|min_length[3]|max_length[100]',
            'status' => 'required|in_list[active,inactive,pending]'
        ];
        
        if (!$this->validate($rules)) {
            return view('records/edit', [
                'title' => 'Edit Record',
                'record' => $record,
                'validation' => $this->validator
            ]);
        }
        
        $data = [
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
            'category' => $this->request->getPost('category'),
            'status' => $this->request->getPost('status')
        ];
        
        if ($this->recordModel->update($id, $data)) {
            return redirect()->to('/records')->with('success', 'Record updated successfully!');
        } else {
            return redirect()->back()->with('error', 'Failed to update record.');
        }
    }
    
    // Delete record (hard delete)
    public function delete($id)
    {
        $record = $this->recordModel->find($id);
        
        if (!$record) {
            return redirect()->to('/records')->with('error', 'Record not found.');
        }
        
        // Hard delete - permanently removes the record from database
        if ($this->recordModel->delete($id)) {
            return redirect()->to('/records')->with('success', 'Record deleted successfully!');
        } else {
            return redirect()->back()->with('error', 'Failed to delete record.');
        }
    }
}
