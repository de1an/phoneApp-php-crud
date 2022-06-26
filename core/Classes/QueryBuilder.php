<?php
class QueryBuilder extends Connection
{
    public function __construct($db)
    {
        $this->db = $db;
    }

    public function selectAll($table)
    {
        $sql   = "SELECT * FROM $table";
        $query = $this->db->prepare($sql);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    public function selectSingle($table,$id)
    {
        $sql   = "SELECT * FROM $table WHERE id = :id";
        $query = $this->db->prepare($sql);
        $query->execute(["id"=>$id]);
        return $query->fetch(PDO::FETCH_OBJ);
    }
    
}