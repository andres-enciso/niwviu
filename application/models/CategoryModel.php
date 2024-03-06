<?php
class CategoryModel extends CI_Model
{
    public function getAll()
    {
        $this->db->from('Category');
        $query = $this->db->get();
        return $query->result();
    }
    public function get_categories()
    {
        $query = $this->db->get('category');
        return $query->result_array();
    }

    public function get($id)
    {
        $query = $this->db->get_where('category', array('category_id' => $id));
        return $query->row_array();
    }
    public function save()
    {
        $data = array(
            'name' => $this->input->post('name'),
            'description' => $this->input->post('description'),
        );

        $this->db->insert('category', $data);
    }
    
    public function update($id)
    {
        $data = array(
            'name' => $this->input->post('name'),
            'description' => $this->input->post('description'),
        );

        $this->db->where('category_id', $id);
        $this->db->update('category', $data);
    }
}
 