<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include "mail/class.phpmailer.php";
include "mail/class.smtp.php";

class Licencia extends CI_Controller {


	public function actualizarEstadoLicencia()
	{
		$idlicencia = $this->input->post('idlicencia');
		$state = $this->input->post('state');
		$this->load->model('Licencias');
		$this->Licencias->actualizarEstado($idlicencia, $state);
	}

	public function actualizarDescLicencia()
	{
		$idlicencia = $this->input->post('idlicencia');
		$desc = $this->input->post('desc');
		$this->load->model('Licencias');
		$this->Licencias->actualizarDesc($idlicencia, $desc);
	}

	public function agregarLicencia()
	{
		$desc = $this->input->post('desc');
		$this->load->model('Licencias');
		$this->Licencias->agregarGrado($desc);
	}

}