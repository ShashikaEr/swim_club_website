<?php
class GalamanagementController extends Controller
{
    private $res1;
    private $res2;

    public function index()
    {
        $this->get_model('Gala');
        $gala = new GalaModel();
        $this->res1 = $gala->getAll();
        $this->res2 = $gala->getResults();
        $this->view('galamanagement', ['results' => $this->res1, 'results2' => $this->res2]);

    }


    function addGalaEvent()   // Add gala events
    {
        $results = array();

        if ($_POST) {
            $gala = $this->get_model('Gala');
            $gala = new GalaModel();
            $results = $gala->addGalaEvent($_POST);


            if ($results) {
                echo '<script language="javascript">';
                echo 'alert("Successfully Create");';
                echo '</script>';
            }
        }


        $this->view('addGalaEvent');
    }
    // Add Gala Results
    function addGalaResults()
    {
        $this->get_model('Gala');
        $gala = new GalaModel();
        $results = $gala->getAll();
        $roleid = array('4', '5');
        $usrmodel = $this->get_model('Users');
        $user = new UsersModel();
        $usrdetails = array();
        foreach ($roleid as $roleid):
            $userresult = $user->getUser("role_id", $roleid);
            $usrdetails = array_merge($usrdetails, $userresult);
        endforeach;
        if ($_POST) {
            $results3 = $gala->addGalaResults($_POST);

            if ($results3) {
                echo '<script language="javascript">';
                echo 'alert("Successfully Created");';
                echo '</script>';
            }
        }
        $this->view('addGalaResults', ['results' => $results, 'usrdetails' => $usrdetails]);
    }
    //Edit Gala Results
    function editGalaResults($result_id = null)
    {
        $this->get_model('Gala');
        $gala = new GalaModel();
        $results = $gala->getResult($result_id);
        $roleid = array('4', '5');
        $usrmodel = $this->get_model('Users');
        $user = new UsersModel();
        $usrdetails = array();
        foreach ($roleid as $roleid):
            $userresult = $user->getUser("role_id", $roleid);
            $usrdetails = array_merge($usrdetails, $userresult);
        endforeach;
        if ($_POST) {
            $results3 = $gala->editgalaresults($result_id, $_POST);
            if ($results3) {
                echo '<script language="javascript">';
                echo 'alert("Successfully ipdated");';
                echo '</script>';
            }
        }
        $this->view('editGalaResults', ['results' => $results, 'usrdetails' => $usrdetails]);
    }
    //Edit Gala Events
    function editGalaEvent($event_id = null){
        $results = array();
        $gala = $this->get_model('Gala');
        $gala = new GalaModel();
        $result1 = $gala->getEvent($event_id);

        if ($_POST) {

            $result2 = $gala->editGalaEvent($event_id,$_POST);

            if ($result2) {
                echo '<script language="javascript">';
                echo 'alert("Successfully updates");';
                echo '</script>';
               }
        }

            $this->view('editGalaEvent',['result1'=>$result1]);
    }
    //Delete Gala Events
    function deleteGalaEvent($event_id = null)
    {

        $gala = $this->get_model('Gala');
        $gala = new GalaModel();
        if (isset($event_id)) {

            $result2 = $gala->deleteGalaEvent($event_id);

            if ($result2) {
                echo '<script language="javascript">';
                echo 'alert("Successfully deleted");';
                echo '</script>';
            } else {
                echo '<script language="javascript">';
                echo 'alert("Unable to delete");';
                echo '</script>';
            }
            $this->redirect('public/galamanagement');
        }
    }



}