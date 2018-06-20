<?php
/**
 * Created by PhpStorm.
 * User: Thành
 * Date: 6/19/2018
 * Time: 9:54 AM
 */

require_once('model/phuhuynhModel.php');
require_once('model/hocsinhModel.php');
require_once('model/relModel.php');

class phuhuynhController extends baseController
{
    public function index()
    {
        $ph = new phuhuynhModel();
        $hs = new hocsinhModel();

        $data_ph = $ph->getList();
        $this->registry->template->data_ph = $data_ph;

        $data_hs = $hs->listOther();
        $this->registry->template->data_hs = $data_hs;

        $this->registry->template->show("header");
        $this->registry->template->show("ph_view");
        $this->registry->template->show("modal/addPH_view");
        $this->registry->template->show("modal/editPH_view");
        $this->registry->template->show("footer");
    }

    public function add(){
        $ph = new phuhuynhModel();
        $rel = new relModel();

        $id = $ph->add($_POST['name'], $_POST['cmnd']);
        $rel->add($id, $_POST['hs_id']);
        header("Location:" . __BASE_URL . "/rel?id={$id}");
    }

    public function delete(){
        $ph = new phuhuynhModel();
        $rel = new relModel();

        $rel->deletebyPH($_GET['id']);
        $ph->delete($_GET['id']);

        header("Location:" . __BASE_URL . "/phuhuynh");
    }

    public function edit(){
        $ph = new phuhuynhModel();
        $ph->edit($_POST['id'], $_POST['name'], $_POST['cmnd']);
        header("Location:" . __BASE_URL . "/phuhuynh");
    }
}