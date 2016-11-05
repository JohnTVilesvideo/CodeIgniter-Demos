<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comment extends CI_Model {
	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public function create() {
		return $this->db->insert('comments', array(
			'name' => $this->input->post('name'),
			'text' => $this->input->post('comment')
		));
	}

	public function get() {
		$query = $this->db->order_by('date', 'DESC')->get('comments');
		return $query->result();
	}
}
