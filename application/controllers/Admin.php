<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include "mail/class.phpmailer.php";
include "mail/class.smtp.php";

class Admin extends CI_Controller {

	/*
	** Controlador para todas las funciones del administrador
	*/

	/* ======================================
	   Muestra la vista de la página de login
	   ======================================*/
	public function index()
	{
		if(isset($this->session->role)) {
			$this->load->view('admin/header.php');
			$this->load->view('admin/index.php');
			$this->load->view('admin/footer.php');
		} else {
			echo "<h2>Oppss... No tiene permisos para estar aquí.</h2>";
		}

	}

	public function areas()
	{
		$this->load->view('admin/header.php');
		$this->load->model('Areas');
		$data['areas'] = $this->Areas->obtenerAreas();
		$this->load->view('admin/areas.php', $data);
		$this->load->view('admin/footer.php');
	}

	public function componentes()
	{
		$this->load->view('admin/header.php');
		$this->load->model('Componentes');
		$data['componentes'] = $this->Componentes->obtenerComponentes();
		$this->load->view('admin/componentes.php', $data);
		$this->load->view('admin/footer.php');
	}

	public function competencias()
	{
		$this->load->view('admin/header.php');
		$this->load->model('Competencias');
		$data['competencias'] = $this->Competencias->obtenerCompetencias();
		$this->load->view('admin/competencias.php', $data);
		$this->load->view('admin/footer.php');
	}

	public function formatos()
	{
		$this->load->view('admin/header.php');
		$this->load->model('Formatos');
		$data['formatos'] = $this->Formatos->obtenerFormatos();
		$this->load->view('admin/formatos.php', $data);
		$this->load->view('admin/footer.php');
	}

	public function grados()
	{
		$this->load->view('admin/header.php');
		$this->load->model('Grados');
		$data['grados'] = $this->Grados->obtenerGrados();
		$this->load->view('admin/grados.php', $data);
		$this->load->view('admin/footer.php');
	}

	public function idiomas()
	{
		$this->load->view('admin/header.php');
		$this->load->model('Idiomas');
		$data['idiomas'] = $this->Idiomas->obtenerIdiomas();
		$this->load->view('admin/idiomas.php', $data);
		$this->load->view('admin/footer.php');
	}

	public function licencias()
	{
		$this->load->view('admin/header.php');
		$this->load->model('Licencias');
		$data['licencias'] = $this->Licencias->obtenerLicencias();
		$this->load->view('admin/licencias.php', $data);
		$this->load->view('admin/footer.php');
	}

}
