<?php

class AuthModel extends Model
{
    //Authenticate user and check the status of the account
    private $table_name = "user_details";

    public function check($username, $password)
    {

        $query1 = "SELECT
                *
            FROM
                " . $this->table_name . "
            WHERE
                account_status = 'active' AND username = ?";

        $stmt = $this->query($query1);
        $stmt->bindParam(1, $username);

        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($row) {
            $pass = $row['password'];
            $result = password_verify($password, $pass);
            if ($result) {
                $_SESSION['user_id'] = $row['user_id'];;
                $_SESSION['username'] = $row['username'];
                $_SESSION['userrole'] = $row['role_id'];
                return true;
            } else {
                return false;
            }
        }
    }

    public function logout()
    {
        session_destroy();

    }
}
