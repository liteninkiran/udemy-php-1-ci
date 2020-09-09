<?php

    defined('BASEPATH') OR exit('No direct script access allowed');

    class Author extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();

            $data = array();

            $this->load->model('author_model');
        }

        public function addAuthor()
        {
            $data['title'] = 'Add Author';
            $data['header'] = $this->load->view('include/header', $data, TRUE);
            $data['sidebar'] = $this->load->view('include/sidebar', '', TRUE);
            $data['content'] = $this->load->view('include/author_add', '', TRUE);
            $data['footer'] = $this->load->view('include/footer', '', TRUE);

            $this->load->view('add_author', $data);
        }

        public function addAuthorForm()
        {
            $name = $this->input->post('name') == '' ? null : $this->input->post('name');

            $data['name'] = $name;

            $this->author_model->insertAuthor($data);
            $dataAuthor['msg'] = '<span style="color:green">Record Created Successfully</span>';
            $this->session->set_flashdata($dataAuthor);
            redirect('author/authorList');
        }

        public function authorList()
        {
            $data['authorData'] = $this->author_model->getAllRecords();

            $data['title'] = 'Author List';
            $data['header'] = $this->load->view('include/header', $data, TRUE);
            $data['sidebar'] = $this->load->view('include/sidebar', '', TRUE);
            $data['content'] = $this->load->view('include/author_list', $data, TRUE);
            $data['footer'] = $this->load->view('include/footer', '', TRUE);

            $this->load->view('author_list', $data);
        }

        public function deleteAuthor($id)
        {
            $this->author_model->deleteById($id);

            $dataAuthor['msg'] = '<span style="color:red">Record Deleted Successfully</span>';
            $this->session->set_flashdata($dataAuthor);
            redirect('author/authorList/');
        }

        public function editAuthor($id)
        {
            $data['authorData'] = $this->author_model->getById($id);

            $data['title'] = 'Edit Author';
            $data['header'] = $this->load->view('include/header', $data, TRUE);
            $data['sidebar'] = $this->load->view('include/sidebar', '', TRUE);
            $data['content'] = $this->load->view('include/author_edit', $data, TRUE);
            $data['footer'] = $this->load->view('include/footer', '', TRUE);

            $this->load->view('edit_author', $data);
        }

        public function editAuthorForm()
        {
            $id   = $this->input->post('id')   == '' ? null : $this->input->post('id');
            $name = $this->input->post('name') == '' ? null : $this->input->post('name');

            $data['name'] = $name;

            $this->author_model->updateAuthor($data, $id);
            $dataAuthor['msg'] = '<span style="color:green">Record Updated Successfully</span>';
            $this->session->set_flashdata($dataAuthor);
            redirect('author/authorList');
        }
    }

?>
