<?php

class Login extends Controller
{
    public function index()
    {
        $errors = [];
        if (count($_POST)>0){
            $user = new Users();
            if ($row = $user->where('email',$_POST['email']))
            {
                $row = $row[0];
                if (password_verify($_POST['password'],$row->password))
                {
                    Auth::authenticate($row);
                    $this->redirect('/home');
                }
            }
            $errors['email'] = '邮箱或密码错误';
        }
        $this->view('login',['errors'=>$errors]);
    }
}