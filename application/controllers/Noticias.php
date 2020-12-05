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

    public function viewNoticia($id_noticia = null, $slug = null) {

        $data['noticia'] = $this->noticias_model->getNoticia($id_noticia, $slug);

        if(($slug == null || $id_noticia == null) || !$data['noticia']) {
            redirect(base_url().'noticias');
        }

        $this->template->title($data['noticia']->titulo);
        $this->template->build('noticias/noticia.php', $data);
    }

}

?>