<?php 

class Inicio extends Public_Controller {

    public function index() {
        $this->template->title('Yale - School of Art');
        $this->template->build('inicio/portada.php');
    }

}

?>