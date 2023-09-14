<?php

class LogoutController extends Controller
{
    function index()
    {

        $this->get_model('Auth');
        $logout = new AuthModel();
        $logout->logout();
        $this->redirect('public/login');
    }
}