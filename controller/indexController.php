<?php

class indexController extends baseController
{

    public function index()
    {
        /*** set a template variable ***/
        $this->registry->template->welcome = 'Hello World!';

        /*** load the index template ***/
        $this->registry->template->show('index');
    }

}

?>