<?php

    class Department_Model extends CI_Model
    {
        public function insertDepartment($data)
        {
            $this->db->insert('tbl_department', $data);
        }

        public function updateDepartment($data, $id)
        {
            // Set field values
            $this->db->set('name', $data['name']);

            // Find record to update
            $this->db->where('id', $id);            

            // Update record
            $this->db->update('tbl_department');
        }

        public function getAllRecords()
        {
            $this->db->select('*');
            $this->db->from('tbl_department');
            $this->db->order_by('name');

            $query = $this->db->get();
            $result = $query->result();

            return $result;
        }

        public function getById($id)
        {
            $this->db->select('*');
            $this->db->from('tbl_department');
            $this->db->where('id', $id);

            $query = $this->db->get();
            $result = $query->row();

            return $result;
        }

        public function deleteById($id)
        {
            $this->db->where('id', $id);
            $this->db->delete('tbl_department');
        }
    }
?>
