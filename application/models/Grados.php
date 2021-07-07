<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Grados extends CI_Model {

	function obtenerGrados()
	{
		$result = $this->db->query("SELECT * FROM grados");
		return $result->result_array();
	}

	function actualizarEstado($idgrado, $state)
	{
		$this->db->query("UPDATE grados SET state=".$state." WHERE idgrado=".$idgrado);
	}


	function agregarGrado($desc)
	{
		$this->db->query("INSERT INTO grados(descgrado, state) VALUES('".$desc."', 1)");
	}

}
