<?php 

class Foro extends Public_Controller {
    
    function __construct() {
        parent::__construct();

        $this->load->model('foro_model');
    }

    public function index() {

        $data['temas'] = $this->foro_model->getTemas();

        $this->template->build('foro/portada.php', $data);
    }
}

?>