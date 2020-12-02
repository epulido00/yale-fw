<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Controller extends CI_Controller {

	public $admin;

	function __construct() {
		parent::__construct();

		$this->template->set_partial('header', 'partials/admin_header.php');
		$this->template->set_layout('admin_layout');
	}
}

class Public_Controller extends CI_Controller {

	public $public;

	function __construct() {
		parent::__construct();

		$this->template->set_partial('header', 'partials/public_header.php');
		$this->template->set_layout('public_layout');
	}
}

?>