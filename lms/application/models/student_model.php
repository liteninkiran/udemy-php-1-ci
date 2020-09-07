<?php

    class Student_Model extends CI_Model
    {
        public function saveStudent($data)
        {
            $this->db->insert('tbl_student', $data);
        }
    }



?>