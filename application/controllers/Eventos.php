<?php 

class Eventos extends Public_Controller {

    function __construct() {
        parent::__construct();

        $this->load->model('eventos_model');
    }

    public function index() {

        $data['eventos'] = $this->eventos_model->getEventos();

        $this->template->build('eventos/portada.php', $data);
    }

}

?>