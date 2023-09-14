<?php

class TrainingdataController extends Controller
{
    //Access Training records management
    public function index()
    {
        $this->get_model('Training');
        $training = new TrainingModel();
        $this->res1 = $training->getRecords();
        $this->view('trainingdatamanagement',['results'=>$this->res1]);

    }
    //Add New Training Records
    function addData(){
        $this->get_model('Training');
        $training = new TrainingModel();
        $roleid = array('4', '5');
        $this->get_model('Users');
        $user = new UsersModel();
        $usrdetails = array();
        foreach ($roleid as $roleid):
            $userresult = $user->getUser("role_id", $roleid);
            $usrdetails = array_merge($usrdetails, $userresult);
        endforeach;
        if ($_POST) {
            $result= $training->addData($_POST);

            if ($result) {
                echo '<script language="javascript">';
                echo 'alert("Successfully Created");';
                echo '</script>';
            }
        }
        $this->view('addtrainingdata',['usrdetails'=>$usrdetails]);
    }

    //Compare Swimmers based on training performance
    function compareSwimmers()
    {

        if ($_POST) {
            $user_ids = $_POST['user_id'];
            $stroke_id = $_POST['stroke_id'];
            $category = $_POST['category'];
            $this->get_model('Training');
            $training = new TrainingModel();
            $results = array();
            foreach ($user_ids as $user_id) {
                $result = $training->compare($user_id, $stroke_id, $category);
                $results = array_merge($results, $result);
            }
            $this->view('compare', ['results' => $results]);
        } else {
            $roleid = array('4', '5');
            $this->get_model('Users');
            $user = new UsersModel();
            $usrdetails = array();
            foreach ($roleid as $roleid):
                $userresult = $user->getUser("role_id", $roleid);
                $usrdetails = array_merge($usrdetails, $userresult);
            endforeach;
            $this->view('compareswimmers', ['usrdetails' => $usrdetails]);
        }
    }


}