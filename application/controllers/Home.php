<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['title'] = 'Solusikenyang - Homepage';

        $this->load->view('navbar', $data);
        $this->load->view('homepage', $data);
    }
}
