<?php 

class Inicio extends Public_Controller {

    public function index() {
        
        $this->load->model('noticias_model');

        $data['noticias'] = $this->noticias_model->getNoticias();

        $this->template->title('Yale - School of Art');
        $this->template->build('inicio/portada.php', $data);
    }

}

?>