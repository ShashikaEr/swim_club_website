<?php


class SquadModel extends Model
{


    private $table_name = "squads";
    private $table_name2 = "assigned_squads";
    private $table_name3 = "user_details";

    //Read Squad Details
    public function getSquadsDetails()
    {

        $query1 = "SELECT
                *
            FROM
                " . $this->table_name . " AS t1
                LEFT JOIN " . $this->table_name3 . " AS t2 ON t1.coach_id = t2.user_id";

        $stmt = $this->query($query1);
        $stmt->execute();

        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);


        if ($rows > 0) {

            return $rows;
        } else {
            return false;
        }
    }

    //Get Squad Assignment Details
    public function getSquadAssignment()
    {

        $query1 = "SELECT
                *
            FROM
                " . $this->table_name2 . " AS t1
                LEFT JOIN " . $this->table_name . " AS t2 ON t1.squad_id = t2.squad_id
                LEFT JOIN " . $this->table_name3 . " AS t3 ON t1.user_id = t3.user_id";

        $stmt = $this->query($query1);
        $stmt->execute();

        $rows1 = $stmt->fetchAll(PDO::FETCH_ASSOC);


        if ($rows1 > 0) {

            return $rows1;
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

    //Add a new squad
    public function add($data)
    {

        //write query
        $query1 = "INSERT INTO
                    " . $this->table_name . "
                SET
				    coach_id=:coach_id, squad_name=:squad_name";


        $stmt = $this->query($query1);


        // posted values
        $this->coach_id = htmlspecialchars(strip_tags($data['coach_id']));
        $this->squad_name = htmlspecialchars(strip_tags($data['squad_name']));

        //bind values
        $stmt->bindParam(":coach_id", $this->coach_id);
        $stmt->bindParam(":squad_name", $this->squad_name);


        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }

    }

    //Assign swimmer to a squad
    public function assignSquad($data)
    {

        $query1 = "INSERT INTO
                    " . $this->table_name2 . "
                SET
				    user_id=:user_id, squad_id=:squad_id";


        $stmt = $this->query($query1);


        // posted values
        $this->user_id = htmlspecialchars(strip_tags($data['user_id']));
        $this->squad_id = htmlspecialchars(strip_tags($data['squad_id']));

        //bind values
        $stmt->bindParam(":user_id", $this->user_id);
        $stmt->bindParam(":squad_id", $this->squad_id);


        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }

    }

}