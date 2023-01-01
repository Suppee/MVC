<?php
class UserController extends Controller {
	
	public function index ($username) {
        $user = $this->model('User')->get_user($username);
        $viewbag['user'] = $user;
		$viewbag['images'] = $this->model('image')->get_userimages($viewbag['user']['username']);
		$this->view('user', 'profile', $viewbag);
	}
	
    public function register () {
        if($this->method('post')) {
            $username = $this->model('User')->register();
            header('Location: /user/login');
        } else {
            $this->view('user', 'registration');
        }
    }

    public function login() {
        if($this->method('post')) {
            if($this->model('User')->login()) {
                $_SESSION['logged_in'] = true;
                
                header('Location: /');
            } else {
                echo 'wrong username or password';
                $this->view('user', 'login');
            }
        } else {
            $this->view('user', 'login');
        }
	}
	
	public function logout() {
        session_unset();
		header('Location: /user/login');	
	}

    public function userlist() {
        $viewbag['users'] = $this->model('user')->get_users();
        $this->view('user', 'table', $viewbag);
    }
	
}