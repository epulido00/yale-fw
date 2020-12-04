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

            $eventosParsed[] = $evento;
        }

        return $eventosParsed;
    }

}

?>