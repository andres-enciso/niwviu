<?php
class BooksModel extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function getAllBooks()
    {
        $this->db->select('book.*, category.name AS category_name');
        $this->db->from('book');
        $this->db->join('category', 'book.category_id = category.category_id', 'inner');
        $query = $this->db->get();
        return $query->result();
    }

    public function save_book()
    {
        $data = array(
            'name' => $this->input->post('name'),
            'author' => $this->input->post('author'),
            'category_id' => $this->input->post('category_id'),
            'published_date' => $this->input->post('published_date'),
            'is_available' => $this->input->post('is_available')
        );

        $this->db->insert('book', $data);
    }

    public function update_book($id)
    {
        $data = array(
            'name' => $this->input->post('name'),
            'author' => $this->input->post('author'),
            'category_id' => $this->input->post('category_id'),
            'published_date' => $this->input->post('published_date'),
            'is_available' => $this->input->post('is_available')
        );

        $this->db->where('book_id', $id);
        $this->db->update('book', $data);
    }


    public function get_book($id)
    {
        $query = $this->db->get_where('book', array('book_id' => $id));
        return $query->row_array();
    }
    public function update_reserva($id)
    {

        $user_id = $this->input->post('user_id');

        $is_available = ($user_id == 0) ? 1 : 0;

        $data = array(
            'user_id' => $user_id,
            'is_available' => $is_available
        );

        $this->db->where('book_id', $id);
        $this->db->update('book', $data);
    }
}
