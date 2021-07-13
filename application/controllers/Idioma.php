<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include "mail/class.phpmailer.php";
include "mail/class.smtp.php";

class Idioma extends CI_Controller {


	public function actualizarEstadoIdioma()
	{
		$ididioma = $this->input->post('ididioma');
		$state = $this->input->post('state');
		$this->load->model('Idiomas');
		$this->Idiomas->actualizarEstado($ididioma, $state);
	}

	public function actualizarDescIdioma()
	{
		$ididioma = $this->input->post('ididioma');
		$desc = $this->input->post('desc');
		$this->load->model('Idiomas');
		$this->Idiomas->actualizarDesc($ididioma, $desc);
	}

	public function agregarIdioma()
	{
		$desc = $this->input->post('desc');
		$this->load->model('Idiomas');
		$this->Idiomas->agregarGrado($desc);
	}

}