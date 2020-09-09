<?php

    defined('BASEPATH') OR exit('No direct script access allowed');

    class Book extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();

            $data = array();

            $this->load->model('book_model');
            $this->load->model('department_model');
            $this->load->model('author_model');
        }

        public function addBook()
        {
            $data['departmentData'] = $this->department_model->getAllRecords();
            $data['authorData'] = $this->author_model->getAllRecords();

            $data['title'] = 'Add Book';
            $data['header'] = $this->load->view('include/header', $data, TRUE);
            $data['sidebar'] = $this->load->view('include/sidebar', '', TRUE);
            $data['content'] = $this->load->view('include/book_add', $data, TRUE);
            $data['footer'] = $this->load->view('include/footer', '', TRUE);

            $this->load->view('home', $data);
        }

        public function addBookForm()
        {
            $name           = $this->input->post('name')          == '' ? null : $this->input->post('name');
            $department_id  = $this->input->post('department_id') == '' ? null : $this->input->post('department_id');
            $author_id      = $this->input->post('author_id')     == '' ? null : $this->input->post('author_id');
            $total          = $this->input->post('total')         == '' ? null : $this->input->post('total');

            $data['name']           = $name;
            $data['department_id']  = $department_id;
            $data['author_id']      = $author_id;
            $data['total']          = $total;

            $this->book_model->insertBook($data);
            $dataBook['msg'] = '<span style="color:green">Record Created Successfully</span>';
            $this->session->set_flashdata($dataBook);
            redirect('book/bookList');
        }

        public function bookList()
        {
            $data['bookData'] = $this->book_model->getAllRecords();

            $data['title'] = 'Book List';
            $data['header'] = $this->load->view('include/header', $data, TRUE);
            $data['sidebar'] = $this->load->view('include/sidebar', '', TRUE);
            $data['content'] = $this->load->view('include/book_list', $data, TRUE);
            $data['footer'] = $this->load->view('include/footer', '', TRUE);

            $this->load->view('home', $data);
        }

        public function deleteBook($id)
        {
            $this->book_model->deleteById($id);

            $dataBook['msg'] = '<span style="color:red">Record Deleted Successfully</span>';
            $this->session->set_flashdata($dataBook);
            redirect('book/bookList/');
        }

        public function editBook($id)
        {
            $data['bookData'] = $this->book_model->getById($id);
            $data['departmentData'] = $this->department_model->getAllRecords();
            $data['authorData'] = $this->author_model->getAllRecords();

            $data['title'] = 'Edit Book';
            $data['header'] = $this->load->view('include/header', $data, TRUE);
            $data['sidebar'] = $this->load->view('include/sidebar', '', TRUE);
            $data['content'] = $this->load->view('include/book_edit', $data, TRUE);
            $data['footer'] = $this->load->view('include/footer', '', TRUE);

            $this->load->view('home', $data);
        }

        public function editBookForm()
        {
            $id             = $this->input->post('id')             == '' ? null : $this->input->post('id');
            $name           = $this->input->post('name')          == '' ? null : $this->input->post('name');
            $department_id  = $this->input->post('department_id') == '' ? null : $this->input->post('department_id');
            $author_id      = $this->input->post('author_id')     == '' ? null : $this->input->post('author_id');
            $total          = $this->input->post('total')         == '' ? null : $this->input->post('total');

            $data['name']           = $name;
            $data['department_id']  = $department_id;
            $data['author_id']      = $author_id;
            $data['total']          = $total;

            $this->book_model->updateBook($data, $id);
            $dataBook['msg'] = '<span style="color:green">Record Updated Successfully</span>';
            $this->session->set_flashdata($dataBook);
            redirect('book/bookList');
        }
    }
?>