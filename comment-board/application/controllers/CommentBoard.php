<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CommentBoard extends CommentBoard_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('Comment');
	}

	public function index() {
		if (strtolower(filter_input(INPUT_SERVER, 'HTTP_X_REQUESTED_WITH')) == 'xmlhttprequest') {
			$data = array(
				'status' => 200,
				'data' => $_POST
			);

			$this->Comment->create();

			header('Content-Type: text/json');
			echo json_encode($data);
		} else {
			$this->viewData['comment_submitted'] = false;

			$this->form_validation->set_rules('name', 'Name', 'required');
			$this->form_validation->set_rules('comment', 'Comment', 'required');

			if ($this->form_validation->run() !== false) {
				$data['comment_submitted'] = true;
				$this->Comment->create();
			}

			$this->viewData['comments'] = $this->Comment->get();
			$this->render('board/index');
		}
	}
}
