<?php

    class Student_Model extends CI_Model
    {
        public function saveStudent($data)
        {
            $this->db->insert('tbl_student', $data);
        }

        public function getAllRecords()
        {
            $this->db->select('*');
            $this->db->from('tbl_student');
            $this->db->order_by('id', 'desc');

            $query = $this->db->get();
            $result = $query->result();

            return $result;
        }
    }



?>