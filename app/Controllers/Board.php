<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Board_model;

class Board extends Controller
{
    protected $boardModel;
    protected $validation;

    public function __construct()
    {
        $this->boardModel = new Board_model();
        $this->validation = \Config\Services::validation();
    }

    public function index()
    {
        return view('board/list');
    }

    public function main()
    {
        return view('board/main');
    }

    public function create()
    {
        return view('board/create');
    }

    public function store()
    {
        $this->validation->setRules([
            'title' => 'required',
            'content' => 'required',
        ]);

        if ($this->validation->withRequest($this->request)->run()) {
            $data = [
                'title' => $this->request->getPost('title'),
                'content' => $this->request->getPost('content'),
                'regdate' => date('Y-m-d H:i:s'),
            ];

            $this->boardModel->insert($data); // 모델의 insert 메서드 사용
            return redirect()->to('/board/list');
        } else {
            return view('board/create', ['validation' => $this->validation]);
        }
    }
}
