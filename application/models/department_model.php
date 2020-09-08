<?php

    class Department_Model extends CI_Model
    {
        public function insertDepartment($data)
        {
            $this->db->insert('tbl_department', $data);
        }
    }
?>
