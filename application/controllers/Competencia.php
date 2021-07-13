<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include "mail/class.phpmailer.php";
include "mail/class.smtp.php";

class Competencia extends CI_Controller {


	public function actualizarEstadoCompetencia()
	{
		$idcompetencia = $this->input->post('idcompetencia');
		$state = $this->input->post('state');
		$this->load->model('Competencias');
		$this->Competencias->actualizarEstado($idcompetencia, $state);
	}

	public function actualizarDescCompetencia()
	{
		$idcompetencia = $this->input->post('idcompetencia');
		$desc = $this->input->post('desc');
		$this->load->model('Competencias');
		$this->Competencias->actualizarDesc($idcompetencia, $desc);
	}

	public function agregarCompetencia()
	{
		$desc = $this->input->post('desc');
		$this->load->model('Competencias');
		$this->Competencias->agregarComponente($desc);
	}

}