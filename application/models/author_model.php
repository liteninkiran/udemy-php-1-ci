<?php

    class Author_Model extends CI_Model
    {
        public function insertAuthor($data)
        {
            $this->db->insert('tbl_author', $data);
        }

        public function updateAuthor($data, $id)
        {
            // Set field values
            $this->db->set('name', $data['name']);

            // Find record to update
            $this->db->where('id', $id);            

            // Update record
            $this->db->update('tbl_author');
        }

        public function getAllRecords()
        {
            $this->db->select('*');
            $this->db->from('tbl_author');
            $this->db->order_by('name');

            $query = $this->db->get();
            $result = $query->result();

            return $result;
        }

        public function getById($id)
        {
            $this->db->select('*');
            $this->db->from('tbl_author');
            $this->db->where('id', $id);

            $query = $this->db->get();
            $result = $query->row();

            return $result;
        }

        public function deleteById($id)
        {
            $this->db->where('id', $id);
            $this->db->delete('tbl_author');
        }
    }
?>
