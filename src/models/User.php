<?php

class User extends Database {
    function checkMatricula($array){
        $sql = $this->db->prepare("SELECT * FROM coche WHERE matricula = :matricula");

        $sql->bindParam(":matricula", $array["matricula"]);

        $sql->execute();
        $res = $sql->fetchAll();

        return $res != null;
    }

    function checkUser($array){
        $sql = $this->db->prepare("SELECT * FROM coche WHERE matricula = :matricula AND pass = :pass");

        $sql->bindParam(":matricula", $array["matricula"]);
        $sql->bindParam(":pass", $array["password"]);

        $sql->execute();
        $res = $sql->fetchAll();

        return $res != null;
    }

    function checkAdmin($array){
        $sql = $this->db->prepare("SELECT * FROM administrador WHERE user = :user AND pass = :pass");

        $sql->bindParam(":user", $array["user"]);
        $sql->bindParam(":pass", $array["password"]);

        $sql->execute();
        $res = $sql->fetchAll();

        return $res != null;
    }

    function createUser($array){
        $sql = $this->db->prepare("INSERT INTO coche (matricula, pass, propietario) VALUES (:matricula,:pass,:propietario)");

        $sql->bindParam(":matricula", $array["matricula"]);
        $sql->bindParam(":pass", $array["password"]);
        $sql->bindParam(":propietario", $array["propietario"]);

        $sql->execute();
    }
}