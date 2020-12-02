<?php 

class Inscripcion extends Public_Controller {

    function __construct() {
        parent::__construct();

        $this->load->model('estudiante_model');
    }

    public function ingresar() {
   
    }

    public function inscribirse() {

        if(!empty($_POST)) {
            $this->estudiante_model->inscribirse($this->input);
        }

        $data = array();
        $data['carreras'] = $this->estudiante_model->getCarreras();

        $this->template->build('inscripcion/inscripcion.php', $data);
    }

}

?>