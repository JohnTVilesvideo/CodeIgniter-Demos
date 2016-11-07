<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Status extends Status_Controller {
	public function __construct() {
		parent::__construct();

		$this->load->model('Facebook');
		$this->load->model('Twitter_REST');
		$this->load->model('Twitter_Streaming');
		$this->load->model('Fake');
		$this->load->model('Google_Maps');
		$this->load->model('Spotify');
	}

	public function index() {
		$this->viewData['statuses'] = array(
			array(
				'name' => 'Facebook (Graph)',
				'code' =>$this->Facebook->getStatus()
			),
			array(
				'name' => 'Twitter (REST)',
				'code' => $this->Twitter_REST->getStatus()
			),
			array(
				'name' => 'Twitter (Streaming)',
				'code' => $this->Twitter_Streaming->getStatus()
			),
			array(
				'name' => 'Fake API',
				'code' => $this->Fake->getStatus()
			),
			array(
				'name' => 'Google Maps',
				'code' => $this->Google_Maps->getStatus()
			),
			array(
				'name' => 'Spotify',
				'code' => $this->Spotify->getStatus()
			)
		);

		$this->render('status/index');
	}
}
