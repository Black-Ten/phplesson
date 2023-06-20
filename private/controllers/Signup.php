<?php

class Signup extends Controller
{
    public function index()
    {
        $errors = [];
        if (count($_POST)>0){
            $user = new Users();
            if ($user->validate($_POST))
            {
                $_POST['date'] = date('Y-m-d');
                $user->insert($_POST);
                $this->redirect('login');
            }else
            {
                $errors = $user->errors;
            }
        }
        $this->view('signup',['errors'=>$errors]);
    }

}