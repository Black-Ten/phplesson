<?php

class Logout extends Controller
{
    public function index()
    {
        Auth::logout();
        $this->redirect('signup');
    }
}