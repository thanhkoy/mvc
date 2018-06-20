<?php
/**
 * Created by PhpStorm.
 * User: Thành
 * Date: 6/19/2018
 * Time: 10:57 AM
 */

require_once('model/hocsinhModel.php');
require_once('model/relModel.php');

class hocsinhController extends baseController
{
    public function index()
    {
        $hs = new hocsinhModel();
        $data = $hs->getList();
        $this->registry->template->data = $data;
        $this->registry->template->show("header");
        $this->registry->template->show("hs_view");
        $this->registry->template->show("modal/addHS_view");
        $this->registry->template->show("modal/editHS_view");
        $this->registry->template->show("footer");
    }

    public function add(){
        $date = date( "Y-m-d", strtotime($_POST['ngaysinh']) );

        $hs = new hocsinhModel();
        $hs->add($_POST['name'], $date);
        header("Location:" . __BASE_URL . "/hocsinh");
    }

    public function delete(){
        $hs = new hocsinhModel();
        $rel = new relModel();

        $rel->deletebyHS($_GET['id']);
        $hs->delete($_GET['id']);
        header("Location:" . __BASE_URL . "/hocsinh");
    }

    public function edit(){
        $hs = new hocsinhModel();
        $hs->edit($_POST['id'], $_POST['name'], $_POST['ngaysinh']);
        header("Location:" . __BASE_URL . "/hocsinh");
    }
}