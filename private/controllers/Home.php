<?php
//控制器
class Home extends Controller
{
    public function index()
    {
        if (!Auth::logged_in())
        {
            $this->redirect('login');
        }
        $user = new Users();
        $data = $user->findAll();
        $this->view('home',["rows"=>$data]);
    }
}