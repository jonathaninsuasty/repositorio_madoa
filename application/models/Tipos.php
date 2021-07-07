<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Tipos extends CI_Model {

	function obtenerTipos()
	{
		$result = $this->db->query("SELECT * FROM tipo_ova");
		return $result->result_array();
	}

	function actualizarEstado($idtipo, $state)
	{
		$this->db->query("UPDATE tipo_ova SET state=".$state." WHERE idtipo=".$idtipo);
	}

}
