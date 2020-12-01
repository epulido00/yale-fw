<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends Admin_Controller {

	public function index() {
		redirect(base_url() . 'admin/ingresar');
	}

	public function ingresar() {
		$this->template->build('admin/login.php');
	}

}
