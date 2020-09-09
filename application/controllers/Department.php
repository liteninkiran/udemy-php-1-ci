<?php

    defined('BASEPATH') OR exit('No direct script access allowed');

    class Department extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();

            $data = array();

            $this->load->model('department_model');
        }

        public function addDepartment()
        {
            $data['title'] = 'Add Department';
            $data['header'] = $this->load->view('include/header', $data, TRUE);
            $data['sidebar'] = $this->load->view('include/sidebar', '', TRUE);
            $data['content'] = $this->load->view('include/department_add', '', TRUE);
            $data['footer'] = $this->load->view('include/footer', '', TRUE);

            $this->load->view('home', $data);
        }

        public function addDepartmentForm()
        {
            $name = $this->input->post('name') == '' ? null : $this->input->post('name');

            $data['name'] = $name;

            $this->department_model->insertDepartment($data);
            $dataDepartment['msg'] = '<span style="color:green">Record Created Successfully</span>';
            $this->session->set_flashdata($dataDepartment);
            redirect('department/departmentList');
        }

        public function departmentList()
        {
            $data['departmentData'] = $this->department_model->getAllRecords();

            $data['title'] = 'Department List';
            $data['header'] = $this->load->view('include/header', $data, TRUE);
            $data['sidebar'] = $this->load->view('include/sidebar', '', TRUE);
            $data['content'] = $this->load->view('include/department_list', $data, TRUE);
            $data['footer'] = $this->load->view('include/footer', '', TRUE);

            $this->load->view('home', $data);
        }

        public function deleteDepartment($id)
        {
            $this->department_model->deleteById($id);

            $dataDepartment['msg'] = '<span style="color:red">Record Deleted Successfully</span>';
            $this->session->set_flashdata($dataDepartment);
            redirect('department/departmentList/');
        }

        public function editDepartment($id)
        {
            $data['departmentData'] = $this->department_model->getById($id);

            $data['title'] = 'Edit Department';
            $data['header'] = $this->load->view('include/header', $data, TRUE);
            $data['sidebar'] = $this->load->view('include/sidebar', '', TRUE);
            $data['content'] = $this->load->view('include/department_edit', $data, TRUE);
            $data['footer'] = $this->load->view('include/footer', '', TRUE);

            $this->load->view('home', $data);
        }

        public function editDepartmentForm()
        {
            $id   = $this->input->post('id')   == '' ? null : $this->input->post('id');
            $name = $this->input->post('name') == '' ? null : $this->input->post('name');

            $data['name'] = $name;

            $this->department_model->updateDepartment($data, $id);
            $dataDepartment['msg'] = '<span style="color:green">Record Updated Successfully</span>';
            $this->session->set_flashdata($dataDepartment);
            redirect('department/departmentList');
        }
    }

?>
