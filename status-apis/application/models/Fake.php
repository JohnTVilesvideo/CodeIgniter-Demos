<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fake extends Status_Model {
	public function __construct() {
		parent::__construct();
		$this->host = 'http://api.vyygir.me/';
	}
}
