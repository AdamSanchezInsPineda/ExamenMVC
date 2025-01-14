<?php

class Multa extends Database{
    function getMultas($matricula){
        $sql = $this->db->prepare('SELECT id_multa, fecha, tipo_multa, pagada FROM multa WHERE matricula LIKE :matricula');
        $sql->bindParam(':matricula', $matricula);
        $sql->execute();
        $result = $sql->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    function getAllMultas(){
        $sql = $this->db->prepare('SELECT m.id_multa, m.fecha, m.tipo_multa, c.matricula, c.propietario FROM multa m INNER JOIN coche c WHERE m.matricula = c.matricula');
        $sql->execute();
        $result = $sql->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    function pagarMulta($id){
        $sql = $this->db->prepare('UPDATE multa SET pagada = 1 WHERE id_multa = :id');
        $sql->bindParam(':id', $id);
        $sql->execute();
    }
}