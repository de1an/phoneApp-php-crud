<?php
class Phone extends QueryBuilder{
    
    function getAll(){
        return $this->selectAll("phones");
    }
}
?>