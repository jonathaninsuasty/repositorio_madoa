<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Tecnologias extends CI_Model {

	function obtenerTecnologias()
	{
		$result = $this->db->query("SELECT * FROM tecnologias");
		return $result->result_array();
	}

	function actualizarEstado($idtecnologia, $state)
	{
		$this->db->query("UPDATE tecnologias SET state=".$state." WHERE idtecnologia=".$idtecnologia);
	}

}
