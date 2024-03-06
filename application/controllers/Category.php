<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Category extends CI_Controller
{
	public function show()
	{
		$title = "Category";
		$content_view = "Category";

		$this->load->model('CategoryModel');

		$Category = $this->CategoryModel->getAll();

		$data['title'] = $title;
		$data['content_view'] = $content_view;
		$data['Category'] = $Category;

		$this->load->view('layout/base', $data);
	}

	public function form($id = NULL)
	{

		$title = "Category";
		$content_view = "form_Category";

		if ($id !== NULL) {
			$data = $this->CategoryModel->get($id);
		} else {
			$data = NULL;
		}

		$this->load->view('layout/base', compact('title', 'content_view', 'data'));
	}

	public function update($id)
	{
		$this->CategoryModel->update($id);
		redirect('category');
	}
	public function save()
	{
		$this->CategoryModel->save();
		redirect('category');
	}
}
