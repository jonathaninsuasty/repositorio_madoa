<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include "mail/class.phpmailer.php";
include "mail/class.smtp.php";

class Grado extends CI_Controller {


	public function actualizarEstadoGrado()
	{
		$idgrado = $this->input->post('idgrado');
		$state = $this->input->post('state');
		$this->load->model('Grados');
		$this->Grados->actualizarEstado($idgrado, $state);
	}

	public function actualizarDescGrado()
	{
		$idgrado = $this->input->post('idgrado');
		$desc = $this->input->post('desc');
		$this->load->model('Grados');
		$this->Grados->actualizarDesc($idgrado, $desc);
	}

	public function agregarGrado()
	{
		$desc = $this->input->post('desc');
		$this->load->model('Grados');
		$this->Grados->agregarGrado($desc);
	}

}