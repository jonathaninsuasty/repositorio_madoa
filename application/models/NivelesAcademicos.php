<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class NivelesAcademicos extends CI_Model {

	function obtenerNiveles()
	{
		$result = $this->db->query("SELECT * FROM niveles_academicos");
		return $result->result_array();
	}

	function actualizarEstado($idnivel, $state)
	{
		$this->db->query("UPDATE niveles_academicos SET state=".$state." WHERE idnivel=".$idnivel);
	}


	function agregarNivel($desc)
	{
		$this->db->query("INSERT INTO niveles_academicos(descnivel, state) VALUES('".$desc."', 1)");
	}

}
