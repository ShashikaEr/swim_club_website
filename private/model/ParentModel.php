<?php


class ParentModel extends Model
{
    public $table_name = "parent_children";
    public function getID($parent_id)
    {

        $query1 = "SELECT
                child_id
            FROM
                " . $this->table_name . "
            WHERE
                parent_id = ?";



        $stmt = $this->query($query1);
        $stmt->bindParam(1, $parent_id);

        $stmt->execute();

        $row = $stmt->fetchAll(PDO::FETCH_ASSOC);


        if ($row > 0) {
            return $row;
        } else {
            return false;
        }
    }

}
