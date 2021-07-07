<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Areas extends CI_Model {

    function obtenerAreas()
    {
        $result = $this->db->query("SELECT * FROM areas");
        return $result->result_array();        
    }

    function actualizarEstado($idarea, $state)
    {
    	$this->db->query("UPDATE areas SET state=".$state." WHERE idarea=".$idarea);
    }

    function actualizarDesc($idarea, $desc)
    {
    	$this->db->query("UPDATE areas SET descarea='".$desc."' WHERE idarea=".$idarea);
    }

    function agregarArea($desc)
    {
    	$this->db->query("INSERT INTO areas(descarea, state) VALUES('".$desc."', 1)");
    }

}