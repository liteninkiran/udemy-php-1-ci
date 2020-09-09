<?php

    defined('BASEPATH') OR exit('No direct script access allowed');

    class Student extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();

            $data = array();

            $this->load->model('student_model');
            $this->load->model('department_model');
        }

        public function addStudent()
        {
            $data['departmentData'] = $this->department_model->getAllRecords();

            $data['title'] = 'Add Student';
            $data['header'] = $this->load->view('include/header', $data, TRUE);
            $data['sidebar'] = $this->load->view('include/sidebar', '', TRUE);
            $data['content'] = $this->load->view('include/student_add', $data, TRUE);
            $data['footer'] = $this->load->view('include/footer', '', TRUE);

            $this->load->view('home', $data);
        }

        public function addStudentForm()
        {
            $name           = $this->input->post('name')          == '' ? null : $this->input->post('name');
            $department_id  = $this->input->post('department_id') == '' ? null : $this->input->post('department_id');
            $role           = $this->input->post('role')          == '' ? null : $this->input->post('role');
            $registration   = $this->input->post('registration')  == '' ? null : $this->input->post('registration');
            $phone          = $this->input->post('phone')         == '' ? null : $this->input->post('phone');

            $data['name']           = $name;
            $data['department_id']  = $department_id;
            $data['role']           = $role;
            $data['registration']   = $registration;
            $data['phone']          = $phone;

            $this->student_model->insertStudent($data);
            $dataStudent['msg'] = '<span style="color:green">Record Created Successfully</span>';
            $this->session->set_flashdata($dataStudent);
            redirect('student/studentList');
        }

        public function studentList()
        {
            $data['studentData'] = $this->student_model->getAllRecords();

            $data['title'] = 'Student List';
            $data['header'] = $this->load->view('include/header', $data, TRUE);
            $data['sidebar'] = $this->load->view('include/sidebar', '', TRUE);
            $data['content'] = $this->load->view('include/student_list', $data, TRUE);
            $data['footer'] = $this->load->view('include/footer', '', TRUE);

            $this->load->view('home', $data);
        }

        public function deleteStudent($id)
        {
            $this->student_model->deleteById($id);

            $dataStudent['msg'] = '<span style="color:red">Record Deleted Successfully</span>';
            $this->session->set_flashdata($dataStudent);
            redirect('student/studentList/');
        }

        public function editStudent($id)
        {
            $data['studentData'] = $this->student_model->getById($id);
            $data['departmentData'] = $this->department_model->getAllRecords();

            $data['title'] = 'Edit Student';
            $data['header'] = $this->load->view('include/header', $data, TRUE);
            $data['sidebar'] = $this->load->view('include/sidebar', '', TRUE);
            $data['content'] = $this->load->view('include/student_edit', $data, TRUE);
            $data['footer'] = $this->load->view('include/footer', '', TRUE);

            $this->load->view('home', $data);
        }

        public function editStudentForm()
        {
            $id             = $this->input->post('id')             == '' ? null : $this->input->post('id');
            $name           = $this->input->post('name')           == '' ? null : $this->input->post('name');
            $department     = $this->input->post('department')     == '' ? null : $this->input->post('department');
            $department_id  = $this->input->post('department_id')  == '' ? null : $this->input->post('department_id');
            $role           = $this->input->post('role')           == '' ? null : $this->input->post('role');
            $registration   = $this->input->post('registration')   == '' ? null : $this->input->post('registration');
            $phone          = $this->input->post('phone')          == '' ? null : $this->input->post('phone');

            $data['name']           = $name;
            $data['department_id']  = $department_id;
            $data['role']           = $role;
            $data['registration']   = $registration;
            $data['phone']          = $phone;

            $this->student_model->updateStudent($data, $id);
            $dataStudent['msg'] = '<span style="color:green">Record Updated Successfully</span>';
            $this->session->set_flashdata($dataStudent);
            redirect('student/studentList');
        }
    }
?>