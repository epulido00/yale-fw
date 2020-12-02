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

    public function newSubtema($id_tema = 0) {

        if($id_tema == 0 || !$this->student) {
            redirect(base_url().'foro');
        }

        if(!empty($_POST)) {
            if($this->foro_model->addSubtema($id_tema, $this->input)) {
                redirect(base_url().'foro');
            }
        }

        $this->template->build('foro/new-subtema.php');
    }
}

?>