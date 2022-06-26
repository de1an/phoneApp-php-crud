<?php
class Provider extends QueryBuilder{
    
    private $tabele= "providers";

    function getAll(){
        return $this->selectAll($this->tabele);
    }

    public function getSingle($id)
    {
        return $this->selectSingle($this->tabele, $id);
    }
}
?>