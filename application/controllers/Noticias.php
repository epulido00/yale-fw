<?php 

class Noticias extends Public_Controller {

    function __construct() {
        parent::__construct();

        $this->load->model('noticias_model');
    }

    public function index() {

        $data['noticias'] = $this->noticias_model->getNoticias();

        $this->template->build('noticias/portada.php', $data);
    }

}

?>