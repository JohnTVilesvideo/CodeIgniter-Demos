<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CommentBoard_Controller extends CI_Controller {
	protected $resources = array();
	protected $viewData = array();

	public function __construct() {
		parent::__construct();

		$this->resources = array(
			'stylesheets' => array(
				'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css',
				'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css',
				$this->getStylesheet('comment-board')
			),
			'scripts' => array(
				'https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js',
				'http://momentjs.com/downloads/moment.js',
				$this->getScript('comment-board')
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
