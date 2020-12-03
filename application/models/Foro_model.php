<?php 

class Foro_model extends CI_Model {

    public function getTemas() {
        return $this->db->get('temas')->result();
    }

    public function getTema($id_tema, $slug){

        $this->db->where('id_tema', $id_tema);
        $this->db->where('slug', $slug);
        $tema = $this->db->get('temas');
        
        if($tema->num_rows() > 0) {
            return $tema->row();
        } else {
            return false;
        }

    }

    public function getSubtema($id_subtema, $slug) {
        $this->db->select('subtemas.id_subtema, subtemas.titulo, subtemas.descripcion, subtemas.fecha_creacion, estudiantes.nombre, estudiantes.apellidop, carreras.nombre as carrera');
        $this->db->where('id_subtema', $id_subtema);
        $this->db->where('slug', $slug);
        $this->db->join('estudiantes', 'estudiantes.matricula = subtemas.id_autor');
        $this->db->join('carreras', 'estudiantes.carrera = carreras.id_carrera');
        $subtema = $this->db->get('subtemas');
        
        if($subtema->num_rows() > 0) {
            $this->db->select('comentarios.id_comentario, comentarios.descripcion, comentarios.fecha_creacion, estudiantes.nombre, estudiantes.apellidop, carreras.nombre as carrera');
            $this->db->where('id_subtema', $subtema->row()->id_subtema);
            $this->db->join('estudiantes', 'estudiantes.matricula = comentarios.id_autor');
            $this->db->join('carreras', 'estudiantes.carrera = carreras.id_carrera');
            $subtema->row()->comentarios = $this->db->get('comentarios')->result();

            return $subtema->row();
        } else {
            return false;
        }
    }

    public function getSubtemas($id_tema) {
        $this->db->where('id_tema', $id_tema);

        $this->db->order_by('fecha_creacion', 'DESC');

        return $this->db->get('subtemas')->result();
    }

    public function getAllSubtemas($id_tema) {
        $this->db->where('id_tema', $id_tema);
        $this->db->join('estudiantes', 'subtemas.id_autor = estudiantes.matricula');
        $this->db->order_by('subtemas.fecha_creacion', 'DESC');

        return $this->db->get('subtemas')->result();
    }

    public function addSubtema($id_tema, $data) {
        if($data && $id_tema) {
            $newSubtema = array(
                'id_tema'       => $id_tema,
                'id_autor'      => $this->student->matricula,
                'titulo'        => $data->post('titulo'),
                'descripcion'   => $data->post('descripcion'),
                'slug'          => $this->findSlug(slugify($data->post('titulo')))
            );

            $this->db->insert('subtemas', $newSubtema);

            return true;
        } else {
            return false;
        }
    }

    //Evitar que se repita el slug
    public function findSlug($slug) {

        $this->db->where('slug', $slug);
        $subt = $this->db->get('subtemas');

        if($subt->num_rows() > 0) {
            $slug = $slug . '-' . rand(0,20);
        }

        return $slug;
    }

    public function addComentario($id_subtema, $id_autor, $data) {
        if($id_subtema && $id_autor && $data) {

            $newComment = array(
                'id_subtema'  => $id_subtema,
                'id_autor'    => $id_autor,
                'descripcion' => $data->post('comentario')
            );

            $this->db->insert('comentarios', $newComment);

            return true;
        } else {
            return false;
        }
    }

}

?>