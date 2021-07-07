<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class RangosEdad extends CI_Model {

	function obtenerRangos()
	{
		$result = $this->db->query("SELECT * FROM rango_edades");
		return $result->result_array();
	}

	function actualizarEstado($idrango, $state)
	{
		$this->db->query("UPDATE rango_edades SET state=".$state." WHERE idrango=".$idrango);
	}

}
