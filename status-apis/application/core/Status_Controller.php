<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Status_Controller extends CI_Controller {
	protected $resources = array();
	protected $viewData = array();

	public function __construct() {
		parent::__construct();

		$this->resources = array(
			'stylesheets' => array(
				'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css',
				$this->getStylesheet('status')
			),
			'scripts' => array(
				'https://use.fontawesome.com/0dd3578e94.js'
			)
		);
	}

	protected function render($template) {
		$this->load->view('global/header', $this->resources);
		$this->load->view($template, $this->viewData);
		$this->load->view('global/footer', $this->resources);
	}

	protected function getScript($script) {
		return base_url('public/js/' . $script . '.js');
	}

	protected function getStylesheet($stylesheet) {
		return base_url('public/css/' . $stylesheet . '.css');
	}

	protected function addScript($script) {
		$this->resources['scripts'][] = $this->getScript($script);
	}

	protected function addStylesheet($stylesheet) {
		$this->resources['stylesheets'][] = $this->getStylesheet($stylesheet);
	}
}
