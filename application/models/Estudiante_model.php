<?php 

    class Estudiante_model extends CI_Model {

        public function login() {

        }

        public function getCarreras() {
            return $this->db->get('carreras')->result();
        }

        public function inscribirse($data) {
            if($data) {
                $newStudent = array(
                    'nombre' => $data->post('nombre'),
                    'apellidop' => $data->post('apellido_p'),
                    'apellidom' => $data->post('apellido_m'),
                    'carrera' => $data->post('carrera')
                );

                $this->db->insert('estudiantes', $newStudent);

                return true;
            } else {
                return false;
            }
        }
    }

?>