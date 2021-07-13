<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Formatos extends CI_Model {

	function obtenerFormatos()
	{
		$result = $this->db->query("SELECT * FROM formatos");
		return $result->result_array();
	}

	function actualizarEstado($idformato, $state)
	{
		$this->db->query("UPDATE formatos SET state=".$state." WHERE idformato=".$idformato);
	}

	function actualizarDesc($idformato, $desc)
    {
    	$this->db->query("UPDATE idformatos SET descformato='".$desc."' WHERE idformato=".$idformato);
    }

    function agregarFormato($desc)
    {
    	$this->db->query("INSERT INTO formatos(descformato, state) VALUES('".$desc."', 1)");
    }

}
