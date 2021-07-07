<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Licencias extends CI_Model {

	function obtenerLicencias()
	{
		$result = $this->db->query("SELECT * FROM licencias");
		return $result->result_array();
	}

	function actualizarEstado($idlicencia, $state)
	{
		$this->db->query("UPDATE licencias SET state=".$state." WHERE idlicecia=".$idlicencia);
	}

}
