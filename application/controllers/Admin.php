<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends Admin_Controller {

	function __construct() {
		parent::__construct();

		$this->load->model('admin_model');
	}

	public function index() {
		redirect(base_url() . 'admin/ingresar');
	}

	public function ingresar() {
		$this->template->build('admin/login.php');
	}

	public function noticias() {

		if(!empty($_POST)) {
            $this->admin_model->addNoticia($this->input);
		}
		
		$this->template->build('admin/noticias');
	}

	public function eventos() {

		if(!empty($_POST)) {
            $this->admin_model->addEvento($this->input);
		}

		$this->template->build('admin/eventos');
	}

}
