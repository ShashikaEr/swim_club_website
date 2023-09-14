<?php
class TrainingModel extends Model
{
    private $table_name1 = "training_performances";
    private $table_name2 ="user_details";
    private $table_name3 ="strokes";

    //Add Training performance
    public function addData($data){

        $query1 = "INSERT INTO
                    " . $this->table_name1 . "
                SET
				    user_id=:user_id, assigned_age_group =:assigned_age_group , Timing=:timing, stroke_id=:stroke_id,
				     updated_by=:updated_by, training_date=:training_date, category=:category";


        $stmt = $this->query($query1);


        // posted values
        $this->assigned_age_group=htmlspecialchars(strip_tags($data['age_group']));
        $this->user_id=htmlspecialchars(strip_tags($data['user_id']));
        $this->training_date=htmlspecialchars(strip_tags($data['training_date']));
        $this->timing=htmlspecialchars(strip_tags($data['timing']));
        $this->stroke_id=htmlspecialchars(strip_tags($data['stroke_id']));
        $this->updated_by=htmlspecialchars(strip_tags($_SESSION['user_id']));
        $this->category=htmlspecialchars(strip_tags($data['category']));

        //bind values
        $stmt->bindParam(":assigned_age_group", $this->assigned_age_group);
        $stmt->bindParam(":user_id", $this->user_id);
        $stmt->bindParam(":training_date", $this->training_date);
        $stmt->bindParam(":timing", $this->timing);
        $stmt->bindParam(":stroke_id", $this->stroke_id);
        $stmt->bindParam(":category", $this->category);
        $stmt->bindParam(":updated_by", $this->updated_by);


        if($stmt->execute()){
            return true;
        }else{
            return false;
        }
    }

    //Read Records from tables
    public function getRecords(){
        $query1 = "SELECT 
                 t1.performance_id, t1.assigned_age_group, t1.Timing, t1.stroke_id, t1.training_date, t1.category, t1.user_id, t2.user_id,
                 t2.username, t2.forename, t2.surname, t3.stroke_name, t3.stroke_id, t1.updated_by, t2.gender
            FROM
                " . $this->table_name1 . " AS t1
                LEFT JOIN ".$this->table_name2." AS t2 ON t1.user_id = t2.user_id
                LEFT JOIN ".$this->table_name3." AS t3 ON t1.stroke_id = t3.stroke_id";

        $stmt = $this->query($query1);
        $stmt->execute();

        $rows1 = $stmt->fetchAll(PDO::FETCH_ASSOC);


        if($rows1>0) {

            return $rows1;
        }
        else{
            return false;
        }
    }

    //Compare users by traininf performance
    public function compare($user_id,$stroke_id,$category){

        $query1 = "SELECT 
                 t1.Timing, t1.stroke_id, t1.category, t1.user_id, t2.user_id,
                 t2.username, t2.forename, t2.surname
            FROM
                " . $this->table_name1 . " AS t1
                LEFT JOIN ".$this->table_name2." AS t2 ON t1.user_id = t2.user_id
            WHERE t1.user_id=$user_id AND t1.stroke_id=$stroke_id AND t1.category='$category'
            ORDER BY t1.Timing ASC
            LIMIT 1
              ";

        $stmt = $this->query($query1);
        $stmt->execute();

        $rows1 = $stmt->fetchAll(PDO::FETCH_ASSOC);


        if($rows1>0) {

            return $rows1;
        }
        else{
            return false;
        }
    }


}
