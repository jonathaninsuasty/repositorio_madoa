<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class SubTipos extends CI_Model {

	function obtenerSubTipos()
	{
		$result = $this->db->query("SELECT * FROM subtipo_ova");
		return $result->result_array();
	}

	function actualizarEstado($idsubtipo, $state)
	{
		$this->db->query("UPDATE subtipo_ova SET state=".$state." WHERE idsubtipo=".$idsubtipo);
	}

}
