<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CommentBoard extends CommentBoard_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('Comment');
	}

	public function index() {
		$data['comments'] = $this->Comment->get();
		$data['comment_submitted'] = false;

		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('comment', 'Comment', 'required');

		if ($this->form_validation->run() !== false) {
			$data['comment_submitted'] = true;
			$this->Comment->create();
		}

		$this->render('board/index', $data);
	}
}
