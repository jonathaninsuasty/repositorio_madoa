<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include "mail/class.phpmailer.php";
include "mail/class.smtp.php";

class Area extends CI_Controller {


	public function actualizarEstadoArea()
	{
		$idarea = $this->input->post('idarea');
		$state = $this->input->post('state');
		$this->load->model('Areas');
		$this->Areas->actualizarEstado($idarea, $state);
	}

	public function actualizarDescArea()
	{
		$idarea = $this->input->post('idarea');
		$desc = $this->input->post('desc');
		$this->load->model('Areas');
		$this->Areas->actualizarDesc($idarea, $desc);
	}

	public function agregarArea()
	{
		$desc = $this->input->post('desc');
		$this->load->model('Areas');
		$this->Areas->agregarArea($desc);
	}

}