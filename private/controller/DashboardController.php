<?php
class DashboardController extends Controller
{
    function index()
    {
        // View dashboard
        return $this->view('dashboard',);
    }
}