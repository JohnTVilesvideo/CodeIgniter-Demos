<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Spotify extends Status_Model {
	public function __construct() {
		parent::__construct();
		$this->host = 'https://developer.spotify.com';
	}
}
