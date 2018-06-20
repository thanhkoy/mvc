<?php
/**
 * Created by PhpStorm.
 * User: Thành
 * Date: 6/19/2018
 * Time: 9:50 AM
 */

class hocsinhModel extends db
{
    public function getList()
    {
        $conn = db::getInstance();
        $rs = $conn->query("select * from hocsinh");
        $data = $rs->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    public function listOther()
    {
        $conn = db::getInstance();
        $rs = $conn->query("SELECT * FROM `hocsinh` WHERE hs_id NOT IN (SELECT hs_id FROM phhs WHERE ph_id IN (select ph_id FROM phhs GROUP BY ph_id HAVING COUNT(ph_id) = 2))");
        $data = $rs->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    public function listOtherbyPH($id){
        $conn = db::getInstance();
        $rs = $conn->query("SELECT * FROM `hocsinh` WHERE hs_id NOT IN (SELECT hs_id FROM phhs WHERE ph_id IN (select ph_id FROM phhs GROUP BY ph_id HAVING COUNT(ph_id) = 2)) AND hs_id NOT IN (SELECT hs_id FROM phhs WHERE ph_id = {$id})");
        $data = $rs->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    public function add($name, $date){
        $conn = db::getInstance();
        $conn->query("insert into hocsinh (hs_hoten, hs_ngaysinh) VALUES ('$name', '$date')");
    }

    public function delete($id){
        $conn = db::getInstance();
        $conn->query("delete from hocsinh WHERE hs_id = {$id}");
    }

    public function edit($id, $name, $date){
        $conn = db::getInstance();
        $conn->query("update hocsinh set hs_hoten = '{$name}', hs_ngaysinh = '{$date}' WHERE hs_id = {$id}");
    }
}