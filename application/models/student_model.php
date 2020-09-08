<?php

    class Student_Model extends CI_Model
    {
        public function insertStudent($data)
        {
            $this->db->insert('tbl_student', $data);
        }

        public function updateStudent($data, $id)
        {
            // Set field values
            $this->db->set('name'        , $data['name']);
            $this->db->set('department'  , $data['department']);
            $this->db->set('role'        , $data['role']);
            $this->db->set('registration', $data['registration']);
            $this->db->set('phone'       , $data['name']);

            // Find record to update
            $this->db->where('id', $id);            

            // Update record
            $this->db->update('tbl_student');
        }

        public function getAllRecords()
        {
            $this->db->select('*');
            $this->db->from('tbl_student');
            $this->db->order_by('name');

            $query = $this->db->get();
            $result = $query->result();

            return $result;
        }

        public function getById($id)
        {
            $this->db->select('*');
            $this->db->from('tbl_student');
            $this->db->where('id', $id);

            $query = $this->db->get();
            $result = $query->row();

            return $result;
        }

        public function deleteById($id)
        {
            $this->db->where('id', $id);
            $this->db->delete('tbl_student');
        }
    }



?>