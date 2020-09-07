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

        public function addStudentForm()
        {
            $data['name']           = $this->input->post('name');
            $data['department']     = $this->input->post('department');
            $data['role']           = $this->input->post('role');
            $data['registration']   = $this->input->post('registration');
            $data['phone']          = $this->input->post('phone');

            $name           = $data['name'];
            $department     = $data['department'];
            $role           = $data['role'];
            $registration   = $data['registration'];
            $phone          = $data['phone'];

            if(empty($name) && empty($department) && empty($role) && empty($registration) && empty($phone))
            {
                $data2 = array();
                $data2['msg'] = '<span style="color:red">Field must not be empty</span>';

                $this->session->set_flashdata($data2);

                redirect('student/addStudent');
            }
            else
            {
                
            }

        }
    }
?>