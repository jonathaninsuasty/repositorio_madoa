<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include "mail/class.phpmailer.php";
include "mail/class.smtp.php";

class Auth extends CI_Controller {

	/*
	** Controlador para inicio de sesión y registro de usuarios
	*/
	/* ======================================
	   Muestra la vista de la página de login
	   ======================================*/
	public function index()
	{
		$this->load->view('auth/index.php');
	}

	public function login()
	{
		$this->load->model('Users');
		$userExist = $this->Users->verifyUser($this->input->post('email'), $this->input->post('password'));
		if ($userExist != 0) {
			if ($userExist[0]['idrole'] == 1) {
				$this->session->set_userdata('role', 1);
				echo 1;
			} elseif ($userExist[0]['idrole'] == 2) {
				$this->session->set_userdata('role', 2);
				echo 1;
			}
			$this->session->set_userdata('nombre', $userExist[0]['nombre']);
			$this->session->set_userdata('apellido', $userExist[0]['apellido']);
		} else {
			echo 0;
		}
	}

	public function logout() {
		session_destroy();
		header('Location: '.base_url());
		exit;
	}

	public function registrar()
	{
		$this->load->view('auth/registrar.php');
	}

}
