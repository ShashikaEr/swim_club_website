<?php

class ProfileController extends Controller
{
    //Profile view
    function index()
    {

        $results = array();
        $usrmodel = $this->get_model('Users');
        $user = new UsersModel();
        $results = $user->getUser("user_id", $_SESSION['user_id']);
        if($_SESSION['userrole']==3){
            $this->get_model('Parent');
            $pr= new ParentModel();
            $child_ids = $pr-> getID($_SESSION['user_id']);
            $childdetails = array();
            foreach ($child_ids as $child_id):
                $userresult = $user->getUser("user_id", $child_id['child_id']);
                $childdetails = array_merge($childdetails, $userresult);
            endforeach;
        }
        else{
            $childdetails=null;
        }

        if (isset($_SESSION['user_id'])) {
            $this->view('profile', ['results' => $results['0'], 'results2'=>$childdetails,
            ]);
        } else {
            $this->redirect('public/login');
        }
    }

    function editProfile($id =null){
            $results = array();
            $user = $this->get_model('Users');
            $user = new UsersModel();

            if ($_POST) {

                $result = $user->editProfile($id,$_POST);

                if ($result) {
                    echo '<script language="javascript">';
                    echo 'alert("Successfully updates");';
                    echo '</script>';
                }
            }

    }
}