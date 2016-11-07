<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Google_Maps extends Status_Model {
	public function __construct() {
		parent::__construct();
		$this->host = 'https://maps.googleapis.com';
	}
}
