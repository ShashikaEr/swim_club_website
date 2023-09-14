<?php

class SignupController extends Controller
{
    public function index()
    {
        $errors = array();
        if ($_POST) {
            $usrmodel = $this->get_model('Users');
            $user = new UsersModel();
            if ($user->validation($_POST)) {  //Validation of input data
                $result = $user->create($_POST);
                if ($result) {
                    echo '<script language="javascript">';
                    echo 'alert("Successfully Registered. Please wait for the confirmation");';
                    echo '</script>';
                } else {
                    echo '<script language="javascript">';
                    echo 'alert("Unable to Create. Please Check");';
                    echo '</script>';
                    $this->redirect('public/login');
                }
            } else {
                $errors = $user->errors;
            }
        }
        $this->view('signup', ['errors' => $errors,
        ]);
    }
}