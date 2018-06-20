<?php
/**
 * Created by PhpStorm.
 * User: Thành
 * Date: 6/19/2018
 * Time: 9:51 AM
 */

class relModel extends db
{
    public function listPH(){
        $ph = db::getInstance();
        $rs = $ph->query("select * from phuhuynh");
        $data = $rs->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    public function listHSbyPH($id){
        $hs = db::getInstance();
        $rs = $hs->query("select * from hocsinh INNER JOIN phhs ON hocsinh.hs_id = phhs.hs_id WHERE ph_id = {$id}");
        $data = $rs->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    public function add($id, $arr){
        $rel = db::getInstance();
        foreach ($arr as $value){
            $rel->query("insert into phhs (hs_id, ph_id) VALUES ({$value}, {$id})");
        }
        return $id;
    }

    public function deletebyPH($id){
        $conn = db::getInstance();
        $conn->query("delete from phhs WHERE ph_id = {$id}");
    }

    public function deletebyHS($id){
        $conn = db::getInstance();
        $conn->query("delete from phhs WHERE hs_id = {$id}");
    }

    public function delete($hs_id, $ph_id){
        $conn = db::getInstance();
        $conn->query("delete from phhs WHERE hs_id = {$hs_id} AND ph_id = {$ph_id}");
    }
}