<?php

namespace App\Models;

use CodeIgniter\Model;

class Board_model extends Model
{
    protected $table = 'boards';
    protected $allowedFields = ['title', 'content', 'regdate'];

    // 필요에 따라 다른 메서드 추가 (예: 게시글 목록 가져오기, 상세 보기, 수정, 삭제 등)
}
