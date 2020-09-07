<?php

    defined('BASEPATH') OR exit('No direct script access allowed');

    class Student extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();

            $data = array();

            //$this->load->model('Student_Model');
        }

        public function addStudent()
        {
            $data['title'] = 'Add New Student';
            $data['header'] = $this->load->view('include/header', $data, TRUE);
            $data['sidebar'] = $this->load->view('include/sidebar', '', TRUE);
            $data['content'] = $this->load->view('include/studentAdd', '', TRUE);
            $data['footer'] = $this->load->view('include/footer', '', TRUE);

            $this->load->view('add_student', $data);
        }
    }
?>