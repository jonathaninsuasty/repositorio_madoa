<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include "mail/class.phpmailer.php";
include "mail/class.smtp.php";

class Componente extends CI_Controller {


	public function actualizarEstadoComponente()
	{
		$idcomponente = $this->input->post('idcomponente');
		$state = $this->input->post('state');
		$this->load->model('componentes');
		$this->componentes->actualizarEstado($idcomponente, $state);
	}

	public function actualizarDescComponente()
	{
		$idcomponente = $this->input->post('idcomponente');
		$desc = $this->input->post('desc');
		$this->load->model('Componentes');
		$this->componentes->actualizarDesc($idcomponente, $desc);
	}

	public function agregarComponente()
	{
		$desc = $this->input->post('desc');
		$this->load->model('Componentes');
		$this->componentes->agregarComponente($desc);
	}

}