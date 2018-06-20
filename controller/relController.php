<?php
/**
 * Created by PhpStorm.
 * User: Thành
 * Date: 6/19/2018
 * Time: 11:22 AM
 */

require_once('model/relModel.php');
require_once('model/hocsinhModel.php');
require_once('model/phuhuynhModel.php');

class relController extends baseController
{
    public function index()
    {
        $rel = new relModel();
        $other = new hocsinhModel();

        $ph = $rel->listPH();
        $this->registry->template->ph = $ph;

        if (isset($_GET['id'])) {
            $hs = $rel->listHSbyPH($_GET['id']);
            $hs_other = $other->listOtherbyPH($_GET['id']);
            $this->registry->template->hs = $hs;
            $this->registry->template->other = $hs_other;
        }

        $this->registry->template->show("header");
        $this->registry->template->show("rel_view");
        $this->registry->template->show("modal/addREL_view");
        $this->registry->template->show("footer");
    }

    public function add(){
        $rel = new relModel();
        $id = $rel->add($_POST['ph_id'], $_POST['hs_id']);
        header("Location:" . __BASE_URL. "/rel?id={$id}");
    }

    public function delete(){
        $rel = new relModel();
        $rel->delete($_GET['hs_id'], $_GET['ph_id']);
        header("Location:" . __BASE_URL . "/rel?id={$_GET['ph_id']}");
    }
}