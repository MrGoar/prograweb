<?php


class Consultas
{

    function __construct()
    {

        $server = 'localhost';
        $username = 'root';
        $password = '';
        $database = 'prograweb';

        try {
            $this->db = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
        } catch (PDOException $e) {
            die('Connection Failed: ' . $e->getMessage());
        }
    }

    function row($sql, $noConvert = false)
    {
        $resultado = $this->db->prepare($sql);
        if ($resultado->execute()) {

            if ($noConvert) {
                $arreglo =  $this->utf8_converter($resultado->fetchAll(PDO::FETCH_ASSOC));
            } else {
                $arreglo = $resultado->fetchAll(PDO::FETCH_ASSOC);
            }

            if (sizeof($arreglo) > 0) {
                return $arreglo[0];
            } else return null;
        } else return null;
    }

    function array($sql)
    {
        $resultados = $this->db->prepare($sql);
        if ($resultados->execute()) {
            $res = $this->utf8_converter($resultados->fetchAll(PDO::FETCH_ASSOC));
            if (is_array($res)) {
                return $res;
            }
            return array();
        } else return array();
    }

    function query($sql)
    {
        $stmt = $this->db->prepare($sql);
        return $stmt->execute();
    }

    function utf8_converter($array)
    {
        array_walk_recursive($array, function (&$row, $key) {
            if (!mb_detect_encoding($row, 'utf-8', true)) {
                $row = utf8_encode($row);
            }
        });

        return $array;
    }
}


class ConsultasMysqli
{
    function __construct()
    {

        $server = 'localhost';
        $username = 'root';
        $password = '';
        $database = 'prograweb';

        try {
            $this->db = new mysqli($server, $username, $password, $database);
        } catch (Exception $e) {
            die('Connection Failed: ' . $e->getMessage());
        }
    }


    function row($sql)
    {
        $arr = $this->array($sql);

        if (sizeof($arr) == 0) {
            return null;
        }
        return $arr[0];
    }

    function array($sql)
    {
        try {
            $query = mysqli_query($this->db, $sql);

            $res = array();
            while ($row = mysqli_fetch_array($query)) {
                $res[] = $row;
            }
            return $res;
        } catch (\Throwable $th) {
            return array();
        }
    }

    function query($sql)
    {
        return $this->db->query($sql);
    }

    function insert($sql){
        $this->query($sql);
        return $this->db->insert_id;
    }
}
