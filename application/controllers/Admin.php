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
