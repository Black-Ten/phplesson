<?php

class Classe extends Controller
{
    public function index()
    {
        if (!Auth::logged_in()) {
            $this->redirect('login');
        }
        $class = new Classes();
        $data = $class->findAll();
//        print_r($data);
        $this->view('classe', ["rows" => $data]);
    }
}