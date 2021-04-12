<?php

class Peoples extends CI_Controller
{
    public function index()
    {
        $this->load->model('Peoples_model', 'peoples');

        // PAGINATION
        // Load Library
        $this->load->library('pagination');
        // Config
        $config['base_url'] = 'http://localhost/ngobar/peoples/index';
        $config['total_rows'] = $this->peoples->countAllPeoples();
        $config['per_page'] = 7;

        // STYLING
        // Enclosing Markup
        $config['full_tag_open'] = "<nav><ul class='pagination justify-content-center'>";
        $config['full_tag_close'] = "</ul></nav>";
        // First Link
        $config['first_link'] = 'First';
        $config['first_tag_open'] = "<li class='page-item'>";
        $config['first_tag_close'] = "</li>";
        // Last Link
        $config["last_link"] = "Last";
        $config["last_tag_open"] = "<li class='page-item'>";
        $config["last_tag_close"] = "</li>";
        // Previous Link
        $config["prev_link"] = "&laquo";
        $config["prev_tag_open"] = "<li class='page-item'>";
        $config["prev_tag_close"] = "</li>";
        // Next Link
        $config["next_link"] = "&raquo";
        $config["next_tag_open"] = "<li class='page-item'>";
        $config["next_tag_close"] = "</li>";
        // Add Attribute <a>
        $config['attributes'] = array('class' => 'page-link');
        // Current Page Link
        $config['cur_tag_open'] = "<li class='page-item active' aria-current='page'><a class='page-link'>";
        $config['cur_tag_close'] = "</a></li>";

        // Initialize
        $this->pagination->initialize($config);

        $data['judul'] = 'List Of Peoples';
        $data['start'] = $this->uri->segment(3);
        $data['peoples'] = $this->peoples->getPeoples($config['per_page'], $data['start']);

        $this->load->view('templates/header', $data);
        $this->load->view('peoples/index', $data);
        $this->load->view('templates/footer');
    }
}
