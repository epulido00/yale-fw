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

    public function viewTema($id_tema = null, $slug = null) {

        $data['tema'] = $this->foro_model->getTema($id_tema, $slug);

        if(($slug == null || $id_tema == null) || !$data['tema']) {
            redirect(base_url().'foro');
        }

        $data['subtemas'] = $this->foro_model->getAllSubtemas($id_tema);

        $this->template->title($data['tema']->nombre);
        $this->template->build('foro/temas.php', $data);
    }

    public function viewSubtema($id_subtema = null, $slug = null) {

        $data['subtema'] = $this->foro_model->getSubtema($id_subtema, $slug);

        if(($slug == null || $id_subtema == null) || !$data['subtema']) {
            redirect(base_url().'foro');
        }

        $this->template->title($data['subtema']->titulo);
        $this->template->build('foro/subtema.php', $data);
    }

    public function addComentario($id_subtema, $id_autor) {
        if(!empty($_POST)) {
            if($this->foro_model->addComentario($id_subtema, $id_autor, $this->input)) {
                redirect($_SERVER['HTTP_REFERER']);
            }
        }
    }
}

?>