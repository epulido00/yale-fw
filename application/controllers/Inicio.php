<?php 

class Inicio extends Public_Controller {

    public function index() {
        
        $this->load->model('noticias_model');

        $data['noticias'] = $this->noticias_model->getNoticias();

        $this->template->title('Yale - School of Art');
        $this->template->build('inicio/portada.php', $data);
    }

    public function busqueda() {

        $this->load->model('inicio_model');
        
        $data['msg'] = NULL;

        if(!empty($_GET)) {
            $data['resultados'] = $this->inicio_model->busqueda($_GET['q']);
        } else {
            $data['msg'] = "No se ha realizado ninguna búsqueda";
        }

        $this->template->build('inicio/busqueda.php', $data);
    }

}

?>