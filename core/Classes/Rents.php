<?php
class Rents extends QueryBuilder
{

    public function getAll()
    {
        $sql = "SELECT r.id, customer, start_date, end_date, p.brand, p.model, pr.provider FROM rents as r JOIN
                phones as p ON p.id = r.phone_id JOIN providers as pr ON pr.id = r.provider_id ORDER BY end_date";
        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    public function addNewRent($data)
    {
        $sql = "INSERT INTO rents (customer, phone_id, provider_id, start_date, end_date)
                            VALUES ( :customer, :phone_id, :provider_id, :start_date, :end_date)";
        $query = $this->db->prepare($sql);
        $query->execute($data);
        if ($query->rowCount() === 1) {
            return true;
        }
        return false;
    }

    public function deleteRent($id)
    {
        $sql = "DELETE FROM rents WHERE id = :id";
        $query = $this->db->prepare($sql);
        $query->bindParam("id", $id, PDO::PARAM_INT);
        $query->execute();
        if ($query->rowCount() === 1) {
            return true;
        }
        return false;
    }

    public function getSingle($id)
    {
        return $this->selectSingle("rents", $id);
    }

    public function updateRent($data)
    {
        $sql = "UPDATE rents
                SET customer = :customer, provider_id = :provider_id, phone_id = :phone_id, start_date = :start_date, end_date = :end_date
                WHERE id = :id";
        $query = $this->db->prepare($sql);
        $query->execute($data);
        if ($query->rowCount() === 1) {
            return true;
        }
        return false;
    }
    public function find($term)
    {
        $sql = "SELECT r.id, customer, start_date, end_date, p.brand, p.model, pr.provider FROM rents as r JOIN
        phones as p ON p.id = r.phone_id JOIN providers as pr ON pr.id = r.provider_id 
        WHERE p.brand LIKE '%". $term ."%' OR pr.provider LIKE '%". $term ."%' OR customer LIKE '%". $term ."%'";
        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetchAll(PDO::FETCH_OBJ);
    }
}
