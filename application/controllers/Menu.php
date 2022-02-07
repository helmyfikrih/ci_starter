<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {

	public function index()
	{
		$data = array(
			'menu_title' => 'Menu Management',
		);
		$this->template->load('template_lte3', 'menu/index', $data);
	}
}
