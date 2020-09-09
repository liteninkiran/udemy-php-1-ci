<?php

    class Loan_Model extends CI_Model
    {
        public function insertLoan($data)
        {
            $this->db->insert('tbl_loan', $data);
        }

        public function updateLoan($data, $id)
        {
            // Set field values
            $this->db->set('name'          , $data['name']);
            $this->db->set('department_id' , $data['department_id']);
            $this->db->set('role'          , $data['role']);
            $this->db->set('registration'  , $data['registration']);
            $this->db->set('phone'         , $data['phone']);

            // Find record to update
            $this->db->where('id', $id);            

            // Update record
            $this->db->update('tbl_loan');
        }

        public function getAllRecords()
        {
            $this->db->select('*');
            $this->db->from('tbl_loan');
            $this->db->order_by('id');

            $query = $this->db->get();
            $result = $query->result();

            return $result;
        }

        public function getById($id)
        {
            $this->db->select('*');
            $this->db->from('tbl_loan');
            $this->db->where('id', $id);

            $query = $this->db->get();
            $result = $query->row();

            return $result;
        }

        public function deleteById($id)
        {
            $this->db->where('id', $id);
            $this->db->delete('tbl_loan');
        }
    }



?>