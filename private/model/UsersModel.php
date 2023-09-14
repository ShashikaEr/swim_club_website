<?php

class UsersModel extends Model
{
    public $username;
    public $role_id;
    public $forename;
    public $surname;
    public $email;
    public $address;
    public $postcode;
    public $telephone;
    public $gender;
    public $dob;
    public $password;
    public $account_status;
    private $table_name = "user_details";
    private $table_name1 = "parent_children";

//Read User Details
    public function getUser($column, $value)
    {
        $query1 = "SELECT
                *
            FROM
                " . $this->table_name . "
            WHERE
                $column = ?";

        $stmt = $this->query($query1);
        $stmt->bindParam(1, $value);

        $stmt->execute();

        $row = $stmt->fetchAll(PDO::FETCH_ASSOC);


        if ($row > 0) {
            return $row;
        } else {
            return false;
        }
    }

// Get all users

    public function getAll()
    {

        $query1 = "SELECT
                *
            FROM
                " . $this->table_name . "
            ";
        $stmt = $this->query($query1);
        $stmt->execute();

        $row = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if ($row > 0) {
            return $row;
        } else {
            return false;
        }
    }

//Create User
    public function create($data)
    {

        //write query
        $query1 = "INSERT INTO
                    " . $this->table_name . "
                SET
				    username=:username, forename=:forename, surname=:surname,password=:password,account_status=:account_status,
				email=:email,address=:address,role_id=:role_id,telephone=:telephone,postcode=:postcode,gender=:gender,created_on=:created_on,dob=:dob";

        $stmt = $this->query($query1);

        // posted values
        $this->username = htmlspecialchars(strip_tags($data['username']));
        $this->role_id = htmlspecialchars(strip_tags($data['role']));
        $this->surname = htmlspecialchars(strip_tags($data['surname']));
        $this->forename = htmlspecialchars(strip_tags($data['forename']));
        $this->email = htmlspecialchars(strip_tags($data['email']));
        $this->address = htmlspecialchars(strip_tags($data['address']));
        $this->postcode = htmlspecialchars(strip_tags($data['postcode']));
        $this->gender = htmlspecialchars(strip_tags($data['gender']));
        $this->account_status = htmlspecialchars(strip_tags("pending"));
        $this->telephone = htmlspecialchars(strip_tags($data['telephone']));
        $this->dob = htmlspecialchars(strip_tags($data['dob']));
        $options = [
            'cost' => 12,
        ];

        $this->password = password_hash($data['password'], PASSWORD_BCRYPT, $options);

        //bind values
        $stmt->bindParam(":username", $this->username);
        $stmt->bindParam(":role_id", $this->role_id);
        $stmt->bindParam(":surname", $this->surname);
        $stmt->bindParam(":forename", $this->forename);
        $stmt->bindParam(":email", $this->email);
        $stmt->bindParam(":address", $this->address);
        $stmt->bindParam(":postcode", $this->postcode);
        $stmt->bindParam(":gender", $this->gender);
        $stmt->bindParam(":account_status", $this->account_status);
        $stmt->bindParam(":telephone", $this->telephone);
        $stmt->bindParam(":dob", $this->dob);
        $stmt->bindParam(":password", $this->password);
        $created_date = date('Y-m-d H:i:s');
        $stmt->bindParam(":created_on", $created_date);


        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }

    }

    //Add new coach
    public function createCoach($data)
    {

        //write query
        $query1 = "INSERT INTO
                    " . $this->table_name . "
                SET
				    username=:username,password=:password,account_status=:account_status,
				role_id=:role_id,created_on=:created_on";


        $stmt = $this->query($query1);
        // posted values
        $this->username = htmlspecialchars(strip_tags($data['username']));
        $this->role_id = htmlspecialchars(strip_tags("2"));
        $this->account_status = htmlspecialchars(strip_tags("active"));
        $options = [
            'cost' => 12,
        ];

        $this->password = password_hash($data['password'], PASSWORD_BCRYPT, $options);

        //bind values
        $stmt->bindParam(":role_id", $this->role_id);
        $stmt->bindParam(":username", $this->username);
        $stmt->bindParam(":account_status", $this->account_status);
        $stmt->bindParam(":password", $this->password);
        $created_date = date('Y-m-d H:i:s');
        $stmt->bindParam(":created_on", $created_date);


        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }

    }
    //Add new coach
    public function createAdmin($data)
    {
        //write query
        $query1 = "INSERT INTO
                    " . $this->table_name . "
                SET
				    username=:username,password=:password,account_status=:account_status,
				role_id=:role_id,created_on=:created_on";
        $stmt = $this->query($query1);
        // posted values
        $this->username = htmlspecialchars(strip_tags($data['username']));
        $this->role_id = htmlspecialchars(strip_tags("1"));
        $this->account_status = htmlspecialchars(strip_tags("active"));
        $options = [
            'cost' => 12,
        ];
        $this->password = password_hash($data['password'], PASSWORD_BCRYPT, $options);
        //bind values
        $stmt->bindParam(":role_id", $this->role_id);
        $stmt->bindParam(":username", $this->username);
        $stmt->bindParam(":account_status", $this->account_status);
        $stmt->bindParam(":password", $this->password);
        $created_date = date('Y-m-d H:i:s');
        $stmt->bindParam(":created_on", $created_date);
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }



    //Validation of user data
    public function validation($data)
    {

        $this->errors = array();
        // Check for password matching
        if ($data['password'] != $data['confirmPassword']) {
            $this->errors[] = "Password do not match";
        }
        //Check for the password length. (Should be alphanumeric including special character and min length 8.
        if (!preg_match('/^(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\W_]).{8,}$/', $data['password'])) {
            $this->errors[] = "Password must match the password policy.Please check the policy";
        }
        //Check email if already exist
        if ($this->getUser('email', $data['email'])) {
            $this->errors[] = "Email already in use";
        } else {
            //Check the email is in correct format
            if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
                $this->errors[] = "Please enter a valid email";
            }
        }
        //Check username if already exist
        if ($this->getUser('username', $data['username'])) {
            $this->errors[] = "Username already in use";
        }
        //Check birthday and user role
        if (isset($data['role']) && ($data['role'] == 0)) {
            $this->errors[] = "Please select a role";
        } else {
            $dob = new DateTime($data['dob']);
            $today = new DateTime('today');
            $years = $dob->diff($today)->y;
            $months = $dob->diff($today)->m;
            $days = $dob->diff($today)->d;
            if (isset($data['role']) && ($data['role'] == "m" || $data['role'] == "f" || $data['role'] == "o")){
            if (!(($years > 16) || ($years == 16 && $months > 0) || ($years == 16 && $months == 0 && $days > 0))) {
                $this->errors[] = "Please enter a vaild birth date.";
            }
        }
        }
        //Check the user gender
        if ($data['gender'] == 0) {
            $this->errors[] = "Please select a gender.";
        }
        //Validate forename. Should be string
        if (!ctype_alpha($data['forename'])) {
            $this->errors[] = "Forename must only contian letters";
        }
        //Validate surname. Should be string
        if (!ctype_alpha($data['forename'])) {
            $this->errors[] = "Surname must only contian letters";
        }
        //Check the mobilenumer format and length(11 digits)
        if (!preg_match('/^[0-9]{11}$/', $data['telephone'])) {
            $this->errors[] = "Enter a valid mobile number";
        }

        if (count($this->errors) == 0) {
            return true;
        } else {
            return false;
        }

    }

    //Coach validate
    public function coachValidate($data)
    {

        $this->errors = array();

        if ($data['password'] != $data['confirmPassword']) {
            $this->errors[] = "Password do not match";
        }

        if (count($this->errors) == 0) {
            return true;

        } else {
            return false;

        }

    }
    //Add a child
    public function addChild($data){
        //write query
        $query1 = "INSERT INTO
                    " . $this->table_name . "
                SET
				    username=:username, forename=:forename, surname=:surname,password=:password,account_status=:account_status,
				email=:email,address=:address,role_id=:role_id,telephone=:telephone,postcode=:postcode,gender=:gender,created_on=:created_on,dob=:dob";

        $stmt = $this->query($query1);
        $role = "5";
        // posted values
        $this->username = htmlspecialchars(strip_tags($data['username']));
        $this->role_id = htmlspecialchars(strip_tags($role));
        $this->surname = htmlspecialchars(strip_tags($data['surname']));
        $this->forename = htmlspecialchars(strip_tags($data['forename']));
        $this->email = htmlspecialchars(strip_tags($data['email']));
        $this->address = htmlspecialchars(strip_tags($data['address']));
        $this->postcode = htmlspecialchars(strip_tags($data['postcode']));
        $this->gender = htmlspecialchars(strip_tags($data['gender']));
        $this->account_status = htmlspecialchars(strip_tags("pending"));
        $this->telephone = htmlspecialchars(strip_tags($data['telephone']));
        $this->dob = htmlspecialchars(strip_tags($data['dob']));
        $options = [
            'cost' => 12,
        ];

        $this->password = password_hash($data['password'], PASSWORD_BCRYPT, $options);

        //bind values
        $stmt->bindParam(":username", $this->username);
        $stmt->bindParam(":role_id", $this->role_id);
        $stmt->bindParam(":surname", $this->surname);
        $stmt->bindParam(":forename", $this->forename);
        $stmt->bindParam(":email", $this->email);
        $stmt->bindParam(":address", $this->address);
        $stmt->bindParam(":postcode", $this->postcode);
        $stmt->bindParam(":gender", $this->gender);
        $stmt->bindParam(":account_status", $this->account_status);
        $stmt->bindParam(":telephone", $this->telephone);
        $stmt->bindParam(":dob", $this->dob);
        $stmt->bindParam(":password", $this->password);
        $created_date = date('Y-m-d H:i:s');
        $stmt->bindParam(":created_on", $created_date);


        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }


    }
    //Updating parent table
    public function updateParent($data){
        $result= $this->getUser("username",$data['username']);
        $result = $result['0'];
        $query1 = "INSERT INTO
                    " . $this->table_name1 . "
                SET
				    parent_id=:parent_id, child_id=:child_id";

        $stmt = $this->query($query1);

        // posted values
        $this->parent_id = htmlspecialchars(strip_tags($_SESSION['user_id']));
        $this->child_id = htmlspecialchars(strip_tags($result['user_id']));

        //bind values
        $stmt->bindParam(":parent_id", $this->parent_id);
        $stmt->bindParam(":child_id", $this->child_id);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }

    }

    function updateProfile($id,$data){

        $query1 = "UPDATE
                    " . $this->table_name . "
                SET
				    forename=:forename, surname=:surname, email=:email,address=:address,
				     telephone=:telephone,postcode=:postcode
				WHERE
				    user_id=:user_id";

        $stmt = $this->query($query1);
        // posted values
        $this->surname = htmlspecialchars(strip_tags($data['surname']));
        $this->forename = htmlspecialchars(strip_tags($data['forename']));
        $this->email = htmlspecialchars(strip_tags($data['email']));
        $this->address = htmlspecialchars(strip_tags($data['address']));
        $this->postcode = htmlspecialchars(strip_tags($data['postcode']));
        $this->telephone = htmlspecialchars(strip_tags($data['telephone']));
        $this->id = htmlspecialchars(strip_tags($id));


        //bind values
        $stmt->bindParam(":surname", $this->surname);
        $stmt->bindParam(":forename", $this->forename);
        $stmt->bindParam(":email", $this->email);
        $stmt->bindParam(":address", $this->address);
        $stmt->bindParam(":postcode", $this->postcode);
        $stmt->bindParam(":telephone", $this->telephone);
        $stmt->bindParam(":user_id", $this->id);




        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }

    }


}