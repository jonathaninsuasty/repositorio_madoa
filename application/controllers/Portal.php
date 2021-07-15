<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include "mail/class.phpmailer.php";
include "mail/class.smtp.php";

class Portal extends CI_Controller {

	/*
	** Controlador para cargar portal
	*/

	public function index()
	{
		$this->load->model('Areas');
		$this->load->model('NivelesAcademicos');
		$data['areas'] = $this->Areas->obtenerAreas();
		$data['niveles'] = $this->NivelesAcademicos->obtenerNiveles();
		$this->load->view('portal/home_4.php', $data);
	}

	public function post($idova)
	{
		$this->load->model('Areas');
		$this->load->model('NivelesAcademicos');
		$data['areas'] = $this->Areas->obtenerAreas();
		$data['niveles'] = $this->NivelesAcademicos->obtenerNiveles();
		$this->load->view('portal/post.php', $data);
	}

}