<?php

    class Book_Model extends CI_Model
    {
        public function insertBook($data)
        {
            $this->db->insert('tbl_book', $data);
        }

        public function updateBook($data, $id)
        {
            // Set field values
            $this->db->set('name'          , $data['name']);
            $this->db->set('department_id' , $data['department_id']);
            $this->db->set('author_id'     , $data['author_id']);
            $this->db->set('total'         , $data['total']);

            // Find record to update
            $this->db->where('id', $id);            

            // Update record
            $this->db->update('tbl_book');
        }

        public function getAllRecords()
        {
            $this->db->select('*');
            $this->db->from('tbl_book');
            $this->db->order_by('name');

            $query = $this->db->get();
            $result = $query->result();

            return $result;
        }

        public function getById($id)
        {
            $this->db->select('*');
            $this->db->from('tbl_book');
            $this->db->where('id', $id);

            $query = $this->db->get();
            $result = $query->row();

            return $result;
        }

        public function deleteById($id)
        {
            $this->db->where('id', $id);
            $this->db->delete('tbl_book');
        }
    }



?>