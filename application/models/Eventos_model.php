<?php 

class Eventos_model extends CI_Model {

    public function getEventos() {

        $eventos = $this->db->get('eventos')->result();

        $eventosParsed = array();
        foreach($eventos as $evento) {
            $mes = date_format(date_create($evento->fecha_evento), 'M');
            $dia = date_format(date_create($evento->fecha_evento), 'd');
            $hora = date_format(date_create($evento->fecha_evento), 'h:i a');

            $evento->mes = $mes;
            $evento->dia = $dia;
            $evento->hora = $hora;

            $evento->participantes = ($evento->participantes) ? json_decode($evento->participantes) : array();

            $eventosParsed[] = $evento;
        }

        return $eventosParsed;
    }

    public function inscribirseEvento($matricula, $id_evento) {
        if($matricula && $id_evento && $this->student) {

            $this->db->where('id_evento', $id_evento);
            $evento = $this->db->get('eventos')->row();

            $participantes = ($evento->participantes) ? json_decode($evento->participantes) : array();
            
            if(!in_array($matricula, $participantes)) {
                $participantes[] = $matricula;

                $this->db->set('participantes', json_encode($participantes));
                $this->db->where('id_evento', $id_evento);
                $this->db->update('eventos');
            }

            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function desinscribirseEvento($matricula, $id_evento) {
        if($matricula && $id_evento && $this->student) {

            $this->db->where('id_evento', $id_evento);
            $evento = $this->db->get('eventos')->row();
        
            $participantes = ($evento->participantes) ? json_decode($evento->participantes) : array();

            if(in_array($matricula, $participantes)) {
                $pos = array_search($matricula, $participantes);
                unset($participantes[$pos]);

                $this->db->set('participantes', json_encode($participantes));
                $this->db->where('id_evento', $id_evento);
                $this->db->update('eventos');
            }

            return TRUE;
        } else {
            return FALSE;
        }
    }

}

?>