<?
namespace App\Controllers;
use App\Models\UserModel;
use CodeIgniter\Controller;


class UserController extends Controller
{
    public function signup()
    {
        return view('user/signup');
    }

     public function store()
        {
            $userModel = new UserModel();

            $isFlutterRequest = $this->request->getHeaderLine('X-Requested-With') === 'Flutter';

            $data = [
                'email' => $this->request->getPost('email'),
                'password' => $this->request->getPost('password'),
            ];

            if ($userModel->insert($data)) {
                if (!$isFlutterRequest) { // Flutter 요청이 아닌 경우에만 리다이렉트
                    return redirect()->to('/');
                } else {
                    return $this->response->setJSON(['status' => 'user created successfully'], 201); // 회원가입 성공 응답
                }
            } else {
                return $this->response->setJSON(['status' => 'Failed to create user signup'], 422);
            }
        }
}