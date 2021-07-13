<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Idiomas extends CI_Model {

	function obtenerIdiomas()
	{
		$result = $this->db->query("SELECT * FROM idiomas");
		return $result->result_array();
	}

	function actualizarEstado($ididioma, $state)
	{
		$this->db->query("UPDATE idiomas SET state=".$state." WHERE ididioma=".$ididioma);
	}

	function actualizarDesc($ididioma, $desc)
    {
    	$this->db->query("UPDATE idiomas SET descidioma='".$desc."' WHERE ididioma=".$ididioma);
    }

	function agregarIdioma($desc)
	{
		$this->db->query("INSERT INTO idiomas(descidioma, state) VALUES('".$desc."', 1)");
	}

}