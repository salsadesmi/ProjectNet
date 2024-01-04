<?php
class Dashboard extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if (!isset($_SESSION['masuk'])) {
            $url = base_url('administrator');
            redirect($url);
        }
    }
    function index()
    {
        $this->load->view('v_dashboard');
    }
}
