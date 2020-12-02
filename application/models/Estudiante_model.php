<?php 

    class Estudiante_model extends CI_Model {

        public function login($data) {
            if($data) {
                $q = $this->db->where('matricula', $data->post('matricula'))->get('estudiantes');

                if($q->num_rows() > 0) {

                    $student = $q->row();

                    if($student->password == $data->post('password')) {
                        return $student;
                    } else {
                        return 2;
                    }
                } else {
                    return 1;
                }

            } else {
                return false;
            }
        }

        public function getCarreras() {
            return $this->db->get('carreras')->result();
        }

        public function inscribirse($data) {
            if($data) {

                $password = substr(md5(rand(0,9999)), 0, 8);

                $newStudent = array(
                    'nombre'    => $data->post('nombre'),
                    'apellidop' => $data->post('apellido_p'),
                    'apellidom' => $data->post('apellido_m'),
                    'password'  => $password,
                    'carrera'   => $data->post('carrera')
                );

                $this->db->insert('estudiantes', $newStudent);

                return json_decode(json_encode($newStudent));
            } else {
                return false;
            }
        }
    }

?>