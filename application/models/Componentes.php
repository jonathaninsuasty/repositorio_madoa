<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Componentes extends CI_Model {

    function obtenerComponentes()
    {
        $result = $this->db->query("SELECT * FROM componentes");
        return $result->result_array();        
    }

    function actualizarEstado($idcomponente, $state)
    {
    	$this->db->query("UPDATE componentes SET state=".$state." WHERE idcomponente=".$idcomponente);
    }

    function actualizarDesc($idcomponente, $desc)
    {
    	$this->db->query("UPDATE componentes SET componentedesc='".$desc."' WHERE idcomponente=".$idcomponente);
    }

    function agregarComponente($desc)
    {
    	$this->db->query("INSERT INTO componentes(componentedesc, state) VALUES('".$desc."', 1)");
    }

}