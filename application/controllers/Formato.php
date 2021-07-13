<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include "mail/class.phpmailer.php";
include "mail/class.smtp.php";

class Formato extends CI_Controller {


	public function actualizarEstadoFormato()
	{
		$idformato = $this->input->post('idformato');
		$state = $this->input->post('state');
		$this->load->model('Formatos');
		$this->Formatos->actualizarEstado($idformato, $state);
	}

	public function actualizarDescFormato()
	{
		$idformato = $this->input->post('idformato');
		$desc = $this->input->post('desc');
		$this->load->model('Formatos');
		$this->Formatos->actualizarDesc($idformato, $desc);
	}

	public function agregarFormato()
	{
		$desc = $this->input->post('desc');
		$this->load->model('Formatos');
		$this->Formatos->agregarFormato($desc);
	}

}