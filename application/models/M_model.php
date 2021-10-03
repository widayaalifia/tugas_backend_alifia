<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
                        
class M_model extends CI_Model 
{
    public function tampil ()
    {
        return $this->db->get('user');

    } 
    public function tampil_update ($id_user)
    {
        $this->db->where('id_user', $id_user);
        return $this->db->get('user');

    } 
    public function tambah($data)
    {
        return $this->db->insert('user', $data);

    } 
    public function update($id_user,$data)
    {
        $this->db->where('id_user', $id_user);
        return $this->db->update('user', $data);

    }
    public function delete($id_user)
    {
        $this->db->where('id_user', $id_user);
        return $this->db->delete('user');

    } 
                         
                        
}


/* End of file M_model.php and path /application/models/M_model.php */

