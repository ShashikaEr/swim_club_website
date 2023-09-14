<?php
class SquadmanagementController extends Controller
{
    //Access Squad Management Page
    public function index()
    {
        $this->get_model('Squad');
        $squad = new SquadModel();
        $results = $squad->getSquadsDetails();
        $results2 = $squad->getSquadAssignment();
        $this->view('squadmanagement', ['results' => $results, 'results2' => $results2]);

    }

    //Add new Squad
    function squadAdd()
    {
        $results = array();
        $usrmodel = $this->get_model('Users');
        $user = new UsersModel();
        $results = $user->getUser("role_id", "2");
        if ($_POST) {

            $this->get_model('Squad');
            $squad = new SquadModel();

                $result = $squad->add($_POST);
                if ($result) {
                    echo '<script language="javascript">';
                    echo 'alert("Successfully Create");';
                    echo '</script>';
                }

        }
        $this->view('squadAdd', ['results' => $results,
        ]);

    }

    //Manage Swimmers with Squads
    function swimmerasSquadAssignment()
    {
        $roleid = array('4', '5');
        $usrmodel = $this->get_model('Users');
        $user = new UsersModel();
        $usrdetails = array();
        foreach ($roleid as $roleid):
            $userresult = $user->getUser("role_id", $roleid);
            $usrdetails = array_merge($usrdetails, $userresult);
        endforeach;
        $this->get_model('Squad');
        $sqd = new SquadModel();
        $sqddetails = $sqd->getAll();

        if ($_POST) {

            if ($result = $sqd->assignSquad($_POST)) {
                if ($result) {
                    echo '<script language="javascript">';
                    echo 'alert("Successfully Assigned");';
                    echo '</script>';
                }
            }

        }
        $this->view('swimmers_squad_assignment', ['results' => $usrdetails, 'sqddetails' => $sqddetails]);
    }
}