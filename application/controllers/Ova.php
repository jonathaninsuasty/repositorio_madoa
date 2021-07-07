<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include "mail/class.phpmailer.php";
include "mail/class.smtp.php";

class Ova extends CI_Controller {

	/*
	** Controlador para inicio de sesión y registro de usuarios
	*/

	/* ======================================
	   Muestra la vista de la página de login
	   ======================================*/
	public function index()
	{
		$this->load->view('admin/header.php');
		$this->load->model('Areas');
		$data['areas'] = $this->Areas->obtenerAreas();
		$this->load->view('ova/cargar.php', $data);
		$this->load->view('admin/footer.php');
	}

	public function cargar()
	{
		$this->load->view('admin/header.php');
		$this->load->model('Areas');
		$this->load->model('NivelesAcademicos');
		$this->load->model('Grados');
		$this->load->model('RangosEdad');
		$this->load->model('Tipos');
		$this->load->model('SubTipos');
		$this->load->model('Tecnologias');
		$this->load->model('Formatos');
		$this->load->model('Licencias');
		$data['areas'] = $this->Areas->obtenerAreas();
		$data['niveles'] = $this->NivelesAcademicos->obtenerNiveles();
		$data['grados'] = $this->Grados->obtenerGrados();
		$data['rangos'] = $this->RangosEdad->obtenerRangos();
		$data['tipos'] = $this->Tipos->obtenerTipos();
		$data['subtipos'] = $this->SubTipos->obtenerSubTipos();
		$data['tecnologias'] = $this->Tecnologias->obtenerTecnologias();
		$data['formatos'] = $this->Formatos->obtenerFormatos();
		$data['licencias'] = $this->Licencias->obtenerLicencias();
		$this->load->view('ova/cargar.php', $data);
		$this->load->view('admin/footer.php');
	}
}
