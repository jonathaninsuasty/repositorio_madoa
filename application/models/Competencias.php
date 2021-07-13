<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Competencias extends CI_Model {

    function obtenerCompetencias()
    {
        $result = $this->db->query("SELECT * FROM competencias");
        return $result->result_array();        
    }

    function actualizarEstado($idcompetencia, $state)
    {
    	$this->db->query("UPDATE competencias SET state=".$state." WHERE idcompetencia=".$idcompetencia);
    }

    function actualizarDesc($idcompetencia, $desc)
    {
    	$this->db->query("UPDATE competencias SET competenciadesc='".$desc."' WHERE idcompetencia=".$idcompetencia);
    }

    function agregarCompetencias($desc)
    {
    	$this->db->query("INSERT INTO competencias(competenciadesc, state) VALUES('".$desc."', 1)");
    }

}