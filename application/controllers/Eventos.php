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

    public function inscribirseEvento($matricula, $id_evento) {
        if($matricula && $id_evento) {
            $this->eventos_model->inscribirseEvento($matricula, $id_evento);
            redirect(base_url().'eventos');
        }
    }

    public function desinscribirseEvento($matricula, $id_evento) {
        if($matricula && $id_evento) {
            $this->eventos_model->desinscribirseEvento($matricula, $id_evento);
            redirect(base_url().'eventos');
        }
    }

}

?>