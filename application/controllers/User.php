<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
	public function show()
	{
		$title = "Users";
		$content_view = "user";

		$this->load->model('UserModel');

		$User = $this->UserModel->getAll();

		$data['title'] = $title;
		$data['content_view'] = $content_view;
		$data['User'] = $User;

		$this->load->view('layout/base', $data);
	}

	public function form($id = NULL)
	{

		$title = "user";
		$content_view = "form_user";

		if ($id !== NULL) {
			$data = $this->UserModel->get($id);
		} else {
			$data = NULL;
		}

		$this->load->view('layout/base', compact('title', 'content_view', 'data'));
	}

	public function update($id)
	{
		$this->UserModel->update($id);
		redirect('user');
	}
	public function save()
	{
		$this->UserModel->save();
		redirect('user');
	}
}
