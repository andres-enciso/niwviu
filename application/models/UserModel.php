<?php
class UserModel extends CI_Model
{
    public function getAll()
    {
        $this->db->from('user');
        $query = $this->db->get();
        return $query->result();
    }
    public function get_categories()
    {
        $query = $this->db->get('user');
        return $query->result_array();
    }

    public function get($id)
    {
        $query = $this->db->get_where('user', array('user' => $id));
        return $query->row_array();
    }
    public function save()
    {
        $data = array(
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
        );

        $this->db->insert('user', $data);
    }
    
    public function update($id)
    {
        $data = array(
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
        );

        $this->db->where('user_id', $id);
        $this->db->update('user', $data);
    }
}
 