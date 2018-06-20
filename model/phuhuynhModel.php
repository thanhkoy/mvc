<?php
/**
 * Created by PhpStorm.
 * User: Thành
 * Date: 6/19/2018
 * Time: 9:50 AM
 */

class phuhuynhModel extends db
{
    public function getList()
    {
        $conn = db::getInstance();
        $rs = $conn->query("select * from phuhuynh");
        $data = $rs->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    public function add($name, $cmnd){
        $conn = db::getInstance();
        $conn->query("insert into phuhuynh (ph_hoten, ph_cmnd) VALUES ('{$name}', '{$cmnd}')");
        $new_id = $conn->lastInsertId();
        return $new_id;
    }

    public function delete($id){
        $conn = db::getInstance();
        $conn->query("delete from phuhuynh WHERE ph_id = {$id}");
    }

    public function edit($id, $name, $cmnd){
        $conn = db::getInstance();
        $conn->query("update phuhuynh set ph_hoten = '{$name}', ph_cmnd = '{$cmnd}' WHERE ph_id = {$id}");
    }
}