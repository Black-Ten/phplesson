<?php

class Updataclasse extends Controller
{
    public function index()
    {
        if (!Auth::logged_in())
        {
            $this->redirect('login');
        }
//        echo "gai";
        $errors = [];
        if (count($_POST)>0){
            $class = new Classe();
            if ($class->validate($_POST))
            {
//                $_POST['date'] = date('Y-m-d');
                $class->insert($_POST);
                $this->redirect('login');
            }else
            {
                $errors = $class->errors;
            }
        }
        $this->view('updataclasse',['errors'=>$errors]);
    }
}