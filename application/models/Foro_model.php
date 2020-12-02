<?php 

class Foro_model extends CI_Model {

    public function getTemas() {
        return $this->db->get('temas')->result();
    }

    public function getSubtemas($id_tema) {
        $this->db->where('id_tema', $id_tema);

        $this->db->order_by('fecha_creacion', 'ASC');

        return $this->db->get('subtemas')->result();
    }

    public function addSubtema($id_tema, $data) {
        if($data && $id_tema) {
            $newSubtema = array(
                'id_tema'       => $id_tema,
                'id_autor'      => $this->student->matricula,
                'titulo'        => $data->post('titulo'),
                'descripcion'   => $data->post('descripcion'),
            );

            $this->db->insert('subtemas', $newSubtema);

            return true;
        } else {
            return false;
        }
    }

}

?>