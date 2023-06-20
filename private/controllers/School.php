<?php
/*
 * School控制器
 */
class School extends Controller
{
    public function index()
    {
        if (!Auth::logged_in())
        {
            $this->redirect('login');
        }
        $schools = new Schools();
        $data =  $schools->findAll();
        $this->view('school',["rows"=>$data]);
    }
}