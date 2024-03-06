<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Library extends CI_Controller
{
	public function index()
	{
		$title = "Página de Inicio";
		$content_view = "inicio";

		$this->load->view('layout/base', compact('title', 'content_view'));
	}

	public function showBooks()
	{
		$title = "Libros";
		$content_view = "books";

		$this->load->model('BooksModel');

		$books = $this->BooksModel->getAllBooks();
		
		$data['title'] = $title;
		$data['content_view'] = $content_view;
		$data['books'] = $books;

		$this->load->view('layout/base', $data);
	}

	public function formBook($id = NULL)
	{

		$title = "Libros";
		$content_view = "form_book";
		$data1['categories'] = $this->CategoryModel->get_categories();
		if ($id !== NULL) {
			$data2['book'] = $this->BooksModel->get_book($id);
		} else {
			$data2['book'] = NULL;
		}

		$this->load->view('layout/base', compact('title', 'content_view', 'data1', 'data2'));
	}

	public function editBook($id)
	{
		$data['book'] = $this->Booksmodel->get_book($id);
		$data['categories'] = $this->CategoryModel->get_categories();
		$this->load->view('edit_book', $data);
	}

	public function updateBook($id)
	{
		$this->BooksModel->update_book($id);
		redirect('books');
	}

	public function saveBook()
	{
		$this->BooksModel->save_book();
		redirect('books');
	}

	public function formReserva($id = NULL)
	{
		$title = "Reservar";
		$content_view = "form_book";
		$data1['categories'] = $this->CategoryModel->get_categories();
		$data2['book'] = $this->BooksModel->get_book($id);
		$data3 = $this->UserModel->get_users();

		$this->load->view('layout/base', compact('title', 'content_view', 'data1', 'data2', 'data3'));
	}
	public function updateReserva($id)
	{
		$this->BooksModel->update_reserva($id);
		redirect('books');
	}
}
