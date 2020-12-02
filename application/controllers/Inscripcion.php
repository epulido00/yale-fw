<?php 

class Inscripcion extends Public_Controller {

    function __construct() {
        parent::__construct();

        $this->load->model('estudiante_model');
    }

    public function ingresar() {

        if($this->student) {
            redirect(base_url());
        }

        $data = array();

        if(!empty($_POST)) {
            $data['student'] = $this->estudiante_model->login($this->input);
            
            if(@gettype($data['student']) == object) {
                $this->session->set_userdata('student', $data['student']);
                redirect(base_url());

            } else if(@$data['student'] == 1) {

                $data['msg'] = "Esta matrícula aún no esta registrada";

            } else if(@$data['student'] == 2) {
                $data['msg'] = "La contraseña ingresada es incorrecta";
            }
        }

        $this->template->build('inscripcion/ingresar.php', $data);
    }

    public function inscribirse() {

        if($this->student) {
            redirect(base_url());
        }

        $this->template->title('Inscripcion - Yale');

        if(!empty($_POST)) {
            $data_mail = $this->estudiante_model->inscribirse($this->input);
            $this->session->set_flashdata('validator', true);
            redirect(base_url().'gracias');
        }

        $data = array();
        $data['carreras'] = $this->estudiante_model->getCarreras();

        $this->template->build('inscripcion/inscripcion.php', $data);
    }

    public function gracias() {
        
        if($this->session->flashdata('validator')) {
            $this->template->build('inscripcion/gracias.php');
        } else {
            redirect(base_url());
        }
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect(base_url());
    }

}

?>