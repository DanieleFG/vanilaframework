
<?php

class Estoque
{
    public function mostrar()
    {
        $con = new PDO('mysql: host=localhost; dbname=dbapi;','root','');

        $sql = "SELECT * FROM estoque ORDER BY id ASC";
        $sql = $con->prepare($sql);
        $sql->execute();

        $resultados = array();
        //PDO::FETCH_ASSOC para não vim dois campos
        while($row = $sql->fetch(PDO::FETCH_ASSOC)) {
            $resultados[] = $row;
        }

        if (!$resultados) {
            throw new Exception("Nenhum pruduto no estoque!");
        }
        
        return $resultados;
    }
}



















