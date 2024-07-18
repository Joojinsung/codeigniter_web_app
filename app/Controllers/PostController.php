<?php
namespace App\Controllers;

use App\Models\PostModel;
use CodeIgniter\Controller;

class PostController extends Controller {
    public function create() {
        return view('create_post');
    }

    public function store() {
        $postModel = new PostModel();

        // 요청이 플러터에서 왔는지 확인
        $isFlutterRequest = $this->request->getHeaderLine('X-Requested-With') === 'Flutter';



        $data = [
            'title' => $this->request->getPost('title'),
            'content' => $this->request->getPost('content')
        ];

        if ($postModel->insert($data)) {
            return $this->response->setJSON(['status' => 'Post created successfully']);
        } else {
            return $this->response->setJSON(['status' => 'Failed to create post'], 500);
        }

     if (!$isFlutterRequest) {
                // 플러터에서 온 요청이 아닌 경우 글 작성 페이지로 리다이렉트
                return redirect()->to('/');
            }
    }
}
