<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Twitter_Streaming extends Status_Model {
	public function __construct() {
		parent::__construct();
		$this->host = 'https://stream.twitter.com/1.1';
	}
}
