<?php

    defined('BASEPATH') OR exit('No direct script access allowed');

    class Loan extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();

            $data = array();

            $this->load->model('loan_model');
            $this->load->model('book_model');
            $this->load->model('student_model');
        }

        public function addLoan()
        {
            $data['bookData'] = $this->book_model->getAllRecords();
            $data['studentData'] = $this->student_model->getAllRecords();

            $data['title'] = 'Add Loan';
            $data['header'] = $this->load->view('include/header', $data, TRUE);
            $data['sidebar'] = $this->load->view('include/sidebar', '', TRUE);
            $data['content'] = $this->load->view('include/loan_add', $data, TRUE);
            $data['footer'] = $this->load->view('include/footer', '', TRUE);

            $this->load->view('home', $data);
        }

        public function addLoanForm()
        {
            $book_id     = $this->input->post('book_id'   ) == '' ? null : $this->input->post('book_id');
            $student_id  = $this->input->post('student_id') == '' ? null : $this->input->post('student_id');
            $start_date  = $this->input->post('start_date') == '' ? null : $this->input->post('start_date');
            $end_date    = $this->input->post('end_date'  ) == '' ? null : $this->input->post('end_date');

            $data['book_id']     = $book_id;
            $data['student_id']  = $student_id;
            $data['start_date']  = $start_date;
            $data['end_date']    = $end_date;

            $this->loan_model->insertLoan($data);
            $dataLoan['msg'] = '<span style="color:green">Record Created Successfully</span>';
            $this->session->set_flashdata($dataLoan);
            redirect('loan/loanList');
        }

        public function loanList()
        {
            $data['loanData'] = $this->loan_model->getAllRecords();

            $data['title'] = 'Loan List';
            $data['header'] = $this->load->view('include/header', $data, TRUE);
            $data['sidebar'] = $this->load->view('include/sidebar', '', TRUE);
            $data['content'] = $this->load->view('include/loan_list', $data, TRUE);
            $data['footer'] = $this->load->view('include/footer', '', TRUE);

            $this->load->view('home', $data);
        }

        public function deleteLoan($id)
        {
            $this->loan_model->deleteById($id);

            $dataLoan['msg'] = '<span style="color:red">Record Deleted Successfully</span>';
            $this->session->set_flashdata($dataLoan);
            redirect('loan/loanList/');
        }

        public function editLoan($id)
        {
            $this->loan_model->endLoan($id);
            redirect('loan/loanList/');
        }
    }
?>