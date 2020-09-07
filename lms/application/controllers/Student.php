<?php

    defined('BASEPATH') OR exit('No direct script access allowed');

    class Student extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();

            $data = array();

            $this->load->model('student_model');
        }

        public function addStudent()
        {
            $data['title'] = 'Add New Student';
            $data['header'] = $this->load->view('include/header', $data, TRUE);
            $data['sidebar'] = $this->load->view('include/sidebar', '', TRUE);
            $data['content'] = $this->load->view('include/student_add', '', TRUE);
            $data['footer'] = $this->load->view('include/footer', '', TRUE);

            $this->load->view('add_student', $data);
        }

        public function editStudent($id)
        {
            $data['studentData'] = $this->student_model->getById($id);

            $data['title'] = 'Student List';
            $data['header'] = $this->load->view('include/header', $data, TRUE);
            $data['sidebar'] = $this->load->view('include/sidebar', '', TRUE);
            $data['content'] = $this->load->view('include/student_edit', $data, TRUE);
            $data['footer'] = $this->load->view('include/footer', '', TRUE);

            $this->load->view('edit_student', $data);
        }

        public function addStudentForm()
        {

            $name           = $this->input->post('name')         == '' ? null : $this->input->post('name');
            $department     = $this->input->post('department')   == '' ? null : $this->input->post('department');
            $role           = $this->input->post('role')         == '' ? null : $this->input->post('role');
            $registration   = $this->input->post('registration') == '' ? null : $this->input->post('registration');
            $phone          = $this->input->post('phone')        == '' ? null : $this->input->post('phone');

            $data['name']           = $name;
            $data['department']     = $department;
            $data['role']           = $role;
            $data['registration']   = $registration;
            $data['phone']          = $phone;

            $this->student_model->saveStudent($data);
            $dataStudent['msg'] = '<span style="color:green">Record Ceated Successfully</span>';
            $this->session->set_flashdata($dataStudent);
            redirect('student/addStudent');
        }

        public function studentList()
        {
            $data['studentData'] = $this->student_model->getAllRecords();

            $data['title'] = 'Student List';
            $data['header'] = $this->load->view('include/header', $data, TRUE);
            $data['sidebar'] = $this->load->view('include/sidebar', '', TRUE);
            $data['content'] = $this->load->view('include/student_list', $data, TRUE);
            $data['footer'] = $this->load->view('include/footer', '', TRUE);

            $this->load->view('student_list', $data);
        }

    }
?>