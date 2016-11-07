<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Status_Model extends CI_Model {
	protected $host;

	public function __construct() {
		parent::__construct();
	}

	public function getStatus() {
		$_curl = @curl_init($this->host);

        @curl_setopt($_curl, CURLOPT_HEADER, true);
        @curl_setopt($_curl, CURLOPT_NOBODY, true);
        @curl_setopt($_curl, CURLOPT_RETURNTRANSFER, true);
		@curl_setopt($_curl, CURLOPT_FOLLOWLOCATION, true);
		@curl_setopt($_curl, CURLOPT_MAXREDIRS, 10);
		@curl_setopt($_curl, CURLOPT_SSL_VERIFYPEER, false);
        @curl_exec($_curl);

        $code = @curl_getinfo($_curl, CURLINFO_HTTP_CODE);
        @curl_close($_curl);

		return $code;
	}
}
