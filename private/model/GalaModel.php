<?php


class GalaModel extends Model
{
    private $table_name = "events";
    private $table_name1 = "gala_results";
    private $table_name2 = "strokes";
    private $table_name3 = "user_details";

    //Get all Gala events detail
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
    //Get the required event
    public function getEvent($event_id)
    {

        $query1 = "SELECT
                *
            FROM
                " . $this->table_name . "
            WHERE 
                 event_id = ?";

        $stmt = $this->query($query1);
        $stmt->bindParam(1, $event_id);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($row > 0) {

            return $row;
        } else {
            return false;
        }
    }
    //Add a new event
    public function addGalaEvent($data)
    {

        $query1 = "INSERT INTO
                    " . $this->table_name . "
                SET
				    event_name=:event_name, location=:location, event_date=:event_date, description=:description,
				     organizedby=:organizedby, contact_number=:contact_number";


        $stmt = $this->query($query1);


        // posted values
        $this->event_name = htmlspecialchars(strip_tags($data['event_name']));
        $this->location = htmlspecialchars(strip_tags($data['location']));
        $this->event_date = htmlspecialchars(strip_tags($data['event_date']));
        $this->description = htmlspecialchars(strip_tags($data['description']));
        $this->organizedby = htmlspecialchars(strip_tags($data['organizedby']));
        $this->contact_number = htmlspecialchars(strip_tags($data['contact_number']));

        //bind values
        $stmt->bindParam(":event_name", $this->event_name);
        $stmt->bindParam(":location", $this->location);
        $stmt->bindParam(":event_date", $this->event_date);
        $stmt->bindParam(":description", $this->description);
        $stmt->bindParam(":organizedby", $this->organizedby);
        $stmt->bindParam(":contact_number", $this->contact_number);


        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
    //Edit gala event details
    public function editGalaEvent($event_id, $data)
    {

        $query1 = "UPDATE
                    " . $this->table_name . "
                SET
				    event_name=:event_name, location=:location, event_date=:event_date, description=:description,
				     organizedby=:organizedby, contact_number=:contact_number
				WHERE
				    event_id=:event_id";


        $stmt = $this->query($query1);


        // posted values
        $this->event_name = htmlspecialchars(strip_tags($data['event_name']));
        $this->location = htmlspecialchars(strip_tags($data['location']));
        $this->event_date = htmlspecialchars(strip_tags($data['event_date']));
        $this->description = htmlspecialchars(strip_tags($data['description']));
        $this->organizedby = htmlspecialchars(strip_tags($data['organizedby']));
        $this->contact_number = htmlspecialchars(strip_tags($data['contact_number']));
        $this->event_id = htmlspecialchars(strip_tags($event_id));

        //bind values
        $stmt->bindParam(":event_name", $this->event_name);
        $stmt->bindParam(":location", $this->location);
        $stmt->bindParam(":event_date", $this->event_date);
        $stmt->bindParam(":description", $this->description);
        $stmt->bindParam(":organizedby", $this->organizedby);
        $stmt->bindParam(":contact_number", $this->contact_number);
        $stmt->bindParam(":event_id", $this->event_id);


        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
    //Delete gala events
    public function deleteGalaEvent($event_id)
    {

        $query1 = "DELETE
                FROM
                    " . $this->table_name . "
        		WHERE
				    event_id=:event_id";


        $stmt = $this->query($query1);

        $this->event_id = htmlspecialchars(strip_tags($event_id));

        //bind values
        $stmt->bindParam(":event_id", $this->event_id);


        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
    //Add gala results
    public function addGalaResults($data)
    {

        $query1 = "INSERT INTO
                    " . $this->table_name1 . "
                SET
				    event_id=:event_id, user_id=:user_id, achievement=:achievement, timing=:timing,
				     stroke_id=:stroke_id, category=:category";


        $stmt = $this->query($query1);


        // posted values
        $this->event_id = htmlspecialchars(strip_tags($data['event_id']));
        $this->user_id = htmlspecialchars(strip_tags($data['user_id']));
        $this->achievement = htmlspecialchars(strip_tags($data['achievement']));
        $this->timing = htmlspecialchars(strip_tags($data['timing']));
        $this->stroke_id = htmlspecialchars(strip_tags($data['stroke_id']));
        $this->category = htmlspecialchars(strip_tags($data['category']));

        //bind values
        $stmt->bindParam(":event_id", $this->event_id);
        $stmt->bindParam(":user_id", $this->user_id);
        $stmt->bindParam(":achievement", $this->achievement);
        $stmt->bindParam(":timing", $this->timing);
        $stmt->bindParam(":stroke_id", $this->stroke_id);
        $stmt->bindParam(":category", $this->category);


        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
    //Read gala results
    public function getResults()
    {
        $query1 = "SELECT 
               * 
            FROM
                " . $this->table_name1 . " AS t1
                LEFT JOIN " . $this->table_name . " AS t2 ON t1.event_id = t2.event_id
                LEFT JOIN " . $this->table_name2 . " AS t3 ON t1.stroke_id = t3.stroke_id
                LEFT JOIN " . $this->table_name3 . " AS t4 ON t1.user_id = t4.user_id";

        $stmt = $this->query($query1);
        $stmt->execute();

        $rows1 = $stmt->fetchAll(PDO::FETCH_ASSOC);


        if ($rows1 > 0) {

            return $rows1;
        } else {
            return false;
        }
    }
}
