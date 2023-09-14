<?php
class UsermanagementController extends Controller
{
    //Access User Management
    function index()
    {
        //$results = array();
        $usrmodel = $this->get_model('Users');
        $user = new UsersModel();
        $results=$user->getAll();
        $this-> view('usermanagement',['results'=>$results]);

    }
    //Add a new coach
    function coachAdd()
    {
        if ($_POST) {

            $usrmodel = $this->get_model('Users');
            $user = new UsersModel();

            if ($user->coachValidate($_POST)) {

                $result = $user->createCoach($_POST);
                if ($result) {
                    echo '<script language="javascript">';
                    echo 'alert("Successfully Create");';
                    echo '</script>';
                }
            }

        }
        $this->view('coachadd');
    }
    //Add a new admin
    function adminAdd()
    {
        if ($_POST) {

            $usrmodel = $this->get_model('Users');
            $user = new UsersModel();

            if ($user->coachValidate($_POST)) {

                $result = $user->createAdmin($_POST);
                if ($result) {
                    echo '<script language="javascript">';
                    echo 'alert("Successfully Create");';
                    echo '</script>';
                }
            }

        }
        $this->view('adminadd');
    }
    //Add a new child
    function childAdd()
    {
        $errors = array();
        if ($_POST) {
            $usrmodel = $this->get_model('Users');
            $user = new UsersModel();
            if ($user->validation($_POST)) {  //Validation of input data
                $result = $user->addChild($_POST);
                $result1 = $user->updateParent($_POST); //update parent-child relationship table
                if ($result & $result1) {
                    echo '<script language="javascript">';
                    echo 'alert("Successfully Added");';
                    echo '</script>';
                } else {
                    echo '<script language="javascript">';
                    echo 'alert("Unable to Create. Please Check");';
                    echo '</script>';
                }
            } else {
                $errors = $user->errors;
            }
        }
        $this->view('childadd', ['errors' => $errors,
        ]);
    }
}